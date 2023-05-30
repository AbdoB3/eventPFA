@extends('admin.layouts.app');

@section('content')
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Ticket</h4>
                        </div>
                        <div class="card-body">
                            <div class="create-event-form">
                                <form action="{{ route('ticket.edit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="mb-3">General Info</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="titre">Event Title</label>
                                            <input type="text" class="form-control" id="titre" placeholder=""
                                                name="event_id">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category">Category</label>
                                            <select id="category" class="form-control" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category">Prix</label>
                                            <select id="category" class="form-control" name="events_id">
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->prix_1 }}</option>
                                                    <option value="{{ $event->id }}">{{ $event->prix_2 }}</option>
                                                    <option value="{{ $event->id }}">{{ $event->prix_3 }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ville">ville</label>
                                            <select id="ville" class="form-control" name="villes_id" type="text">
                                                @foreach ($villes as $villes)
                                                    <option value="{{ $villes->id }}">{{ $villes->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('villes_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <textarea class="form-control" placeholder="n°"@error('Quantity') is-invalid @enderror id="quantity" name="quantity"></textarea>
                                        @error('Quantity')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="start">Event Starts</label>
                                    <input type="datetime" class="form-control" id="start" placeholder=""
                                        name="events_id">
                                    @error('start')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="end">Event Ends</label>
                                    <input type="datetime" class="form-control" id="end" placeholder=""
                                        name="events_id">
                                    @error('end')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="admin">admin's</label>
                                    <select id="ville" class="form-control" name="users_id" type="text">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="events_id">
                                    @error('image')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
