@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid mt-5 mx-4">

        <div class="row justify-content-center mx-5">

            <div class="col-xl-8 mx-5">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Guest list</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Guest Name</th>
                                        <th>e-mail</th>
                                        <th>image</th>
                                        <th>Date Creation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="justify-content-between">
                                    @foreach ($users as $key => $users)
                                    @if ($users->user_type == 'user')
                                        <tr>
                                            <th>{{ $key + 1 }}</th>
                                            <td>{{ $users->name }}</td>
                                            <td >{{ $users->email }}</td>
                                            <td class="rounded-circle"><img src="{{asset('images') }}/{{ $users->image }}" alt="" class="rounded-circle " width="45px"></td>
                                            <td>{{ $users->created_at }}</td>
                                            <td>
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                                                    type="button">Action</button>
                                                <div class="dropdown-menu">
                                                    <a href="javascript:void()" class="dropdown-item">viewport</a>
                                                    <a href="javascript:void()" class="dropdown-item">Remove</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
