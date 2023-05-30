@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.top_menu')
    @include('admin.layouts.side_bar')
    <div class="content-body text-black">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="b">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Events</span>
                    </div>
                </div>
                {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
                    </ol>
                </div> --}}
            </div>
            <!-- row -->


            <div class="row text-black">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All events</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr class="text-black">
                                            <th scope="col" class="text-dark">n°</th>
                                            <th scope="col" class="text-dark">title</th>
                                            <th scope="col" class="text-dark">category</th>
                                            <th scope="col" class="text-dark">ville</th>

                                            <th scope="col" class="text-dark">prix</th>
                                            <th scope="col" class="text-dark">date_debut</th>
                                            <th scope="col" class="text-dark">date_end</th>

                                            <th scope="col" class="text-dark">image</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: black ">
                                        @foreach ($events as $key => $event)
                                            <tr class="text-black">
                                                <th >{{ $key + 1 }}</th>

                                                <td class="me-5 text-black">{{ $event->titre }}</td>
                                                <td class="text-dark">{{ $event->category->name }}</td>
                                                <td class="text-dark">{{ $event->villes->name }}</td>

                                                <td class="text-dark">{{ $event->prix_1 }}</td>

                                                <td class="text-dark">{{ $event->date_debut }}</td>
                                                <td class="text-dark">{{ $event->date_fin }}</td>

                                                <td><img src="{{ asset($event->image) }}" class="rounded" width="200px" style="filter: drop-shadow(0 0 0.75rem crimson);"></td>
                                                <td>
                                                    <a class="btn btn-secondary text-light" data-bs-dismiss="modal"
                                                        href="{{ route('event.edit', encrypt($event->id)) }}">modifier</a>
                                                    <form action="{{ route('event.destroy', $event->id) }}" method="POST"
                                                        id="{{ $event->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button
                                                                onclick="event.preventDefault();
                                                            if(confirm('Voulez vous supprimer levenement {{ $event->name }} ?'))document.getElementById ({{ $event->id }}).submit()"
                                                                class="btn btn-danger ">Supprimer</button>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
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
