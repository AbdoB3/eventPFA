<?php

namespace App\Http\Controllers;

use App\Models\Villes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ville = Villes::all();
        return view('admin.ville.index', compact('ville'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ville.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $villes = new Villes();
        $villes->name = $request->name;
        $villes->slug = Str::slug($request->name);
        $villes->save();
        return redirect()->route('ville.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show(Villes $villes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villes = Villes::find(decrypt($id));
        return view('admin.ville.edit', compact('villes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $villes = Villes::find($id);
        $villes->name = $request->name;

        $villes->save();
        return redirect()->route('ville.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Villes::destroy($id);
        return redirect()->route('ville.index');
    }
}
