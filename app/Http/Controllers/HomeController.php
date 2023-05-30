<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Event;
use App\Models\Ligne;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $events = Event::all();
        $categories = Category::all();


        if (Auth::user()) {
            $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();
            return view('welcome', compact('orders','events', 'categories'));
        }
        return view('welcome', compact('events','categories'));
    }
    public function detailles($id)
    {
        $lastDay = Carbon::now()->subDays(0)->format('d');
        $events = Event::find($id);
        $tickets = Ticket::find($id);

        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();
        return view('detailles.detailles', compact('events', 'tickets', 'orders','lastDay'));
    }
    public function guests()
    {
        $users = User::all();

        return view('admin.Guests.index', compact('users'));
    }

    public function search(Request $request)
    {
        $events = Event::where('titre', 'LIKE', '%' . $request->key . '%');

        return view('welcome', compact('events'));
    }

    public function profile()
    {
        // $user = User::where(Auth::user())->get();
        return view('admin.profile');
    }
    public function profile_user()
    {
        return view('user.profile');
    }
    public function calender()
    {
        return view('admin.calender.calender');
    }
    public function About()
    {
        return view('About');
    }





    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_type == "admin") {
            return redirect('admin/dashboard');
        } else {
            return view('user.dashboard');
        }
    }
    public function dashboard_admin()
    {
        $firstDay = Carbon::now()->subDays(7)->format('d');
        $lastDay = Carbon::now()->subDays(0)->format('d');
        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();
        $users = User::select('id', 'created_at')->where('created_at', '>=', $firstDay)->get()->groupBy(function($day){
            return Carbon::parse($day->created_at)->format('d');
        });
        return view('admin.dashboard',compact('firstDay', 'lastDay', 'users','orders'));
    }
    public function login_admin()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == "admin") {
                return redirect()->route('dashboard');
            }
            return redirect()->route('welcome');
        } else {
            return view('admin.auth.login');
        }
    }
    public function showContactForm(ContactRequest $request)
    {

        Mail::to('abdo.bihi03@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->phone,
            $request->content
        ));
        return view('contact.contact');
    }
    public function submitEvents()
    {
        return view('admin.events.index');
    }
    public function Gallery()
    {
        return view('Gallery');
    }
    public function browse($idcategory)
    {
        $events = Event::all();
        $category = Category::find($idcategory);
        $event = $category->event;
        return view('browse',compact('events','event'));
    }
    public function blog()
    {
        $events = Event::all();

        return view('blog',compact('events'));
    }
    public function dashboard_user()
    {
        // $users = User::all();
        return view('user.dashboard');
    }
    public function orders()
    {
        $order = Order::all();
        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();

        return view('admin.orders.orders',compact('orders','order'));
    }
    public function orders_user()
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();
        $events=Event::all();
        return view('user.orders_user.orders',compact('orders','order','events'));
    }





    public function updateProfile(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password) {
            Auth::user('admin')->password = Hash::make($request->password);
        }

        if ($request->file('image')) {
            // Supprimer ancienne photo
            $file_path = public_path() . '/images/' . Auth::user()->image;
            // unlink($file_path);

            // Upload Image
            $newName = uniqid(); // Exemple 4gh2ryf8
            $image = $request->file('image');
            $newName .= "." . $image->getClientOriginalExtension(); // .jpg
            // echo $newName; // 4gh2ryf8.jpg
            $destinationPath = 'images';
            $image->move($destinationPath, $newName);

            Auth::user()->image = $newName;
        }
        Auth::user()->update();
        return redirect('/profile')->with('success', 'Admin modifier avec succes.. !');
    }
    public function updateProfile_user(Request $request)
    {
        Auth::user('user')->name = $request->name;
        Auth::user('user')->email = $request->email;
        if ($request->password) {
            Auth::user('user')->password = Hash::make($request->password);
        }

        if ($request->file('image')) {
            // Supprimer ancienne photo
            $file_path = public_path() . '/images/' . Auth::user('user')->photo;
            // unlink($file_path);

            // Upload Image
            $newName = uniqid(); // Exemple 4gh2ryf8
            $image = $request->file('image');
            $newName .= "." . $image->getClientOriginalExtension(); // .jpg
            // echo $newName; // 4gh2ryf8.jpg
            $destinationPath = 'images';
            $image->move($destinationPath, $newName);

            Auth::user()->image = $newName;
        }
        Auth::user()->update();
        return redirect('/profile_user')->with('success', 'Admin modifier avec succes.. !');
    }
}
