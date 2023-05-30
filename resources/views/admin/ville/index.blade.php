@extends('admin.layouts.app');

@section('content')
@include('admin.layouts.top_menu')
@include('admin.layouts.side_bar')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Villes</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Villes</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row text-black" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Villes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col" class="text-dark">n°</th>
                                            <th scope="col" class="text-dark">Nom de la ville</th>
                                            <th scope="col" class="text-dark">Date de création</th>
                                            <th scope="col" class="text-dark">Date de modification</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($ville as $key => $villes)
                                            <tr>
                                                <th class="text-dark">{{ $key + 1 }}</th>
                                                <td class="text-dark">{{ $villes->name }}</td>
                                                <td class="text-dark">{{ $villes->created_at->diffForHumans() }}</td>
                                                <td class="text-dark">{{ $villes->updated_at->diffForHumans() }}</td>
                                                <td class="justify-content-center align-items-center text-black">
                                                    <a class="btn btn-secondary " data-bs-dismiss="modal"
                                                        href="{{ route('ville.edit', encrypt($villes->id)) }}"> <i
                                                            class="fa fa-plus"></i> modifier </a>
                                                    <form action="{{ route('ville.destroy', $villes->id) }}" method="POST" id="{{ ('villes->id') }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button onclick="event.preventDefault();
                                                            if(confirm('Voulez vous supprimer levenement {{ $villes->name}} ?'))document.getElementById ({{ $villes->id }}).submit()"  class="btn btn-danger btn-secondary " <span class="btn-icon-right"><i
                                                class="fa fa-close"></i></span> Supprimer </button>

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
