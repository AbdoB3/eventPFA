@extends('admin.layouts.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Tickets</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tickets</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tickets</h4>
                        </div>
                        <div class="card-drop">
                            <div class="table-responsive ">
                                <table id="example">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col" class="text-white">n°</th>
                                            <th scope="col" class="text-white">event_name</th>
                                            <th scope="col" class="text-white">category</th>
                                            <th scope="col" class="text-white">ville</th>
                                            <th scope="col" class="text-white">bronze price</th>
                                            <th scope="col" class="text-white">admin's</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $key => $tickets)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $tickets->titre }}</td>
                                                <td>{{ $tickets->category->name }}</td>
                                                <td>{{ $tickets->villes->name }}</td>
                                                <td>{{ $tickets->prix}}</td>
                                                <td>{{ $tickets->date_debut }}</td>
                                                <td>{{ $tickets->date_fin }}</td>
                                                <td>{{ $tickets->users_id }}</td>
                                                <td>{{ $tickets->image }}</td>
                                                <td>
                                                    <a class="btn btn-secondary text-white" data-bs-dismiss="modal"
                                                                href="{{ route('ticket.edit', encrypt($tickets->id)) }}">modifier</a>
                                                    <form action="{{ route('ticket.destroy', $tickets->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>

                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>

                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
