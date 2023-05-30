@extends('admin.layouts.app');

@section('content')
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card text-dark">
                        <div class="card-header">
                            <h4 class="card-title">Create Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="create-event-form text-dark">
                                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="mb-3">General Info</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="titre">Event Title</label>
                                            <input type="text" class="form-control" id="titre" placeholder=""
                                                name="titre">
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
                                        <label for="content">Content</label>
                                        <textarea class="form-control" placeholder="Write the description"@error('content') is-invalid @enderror id="content"
                                            name="content"></textarea>
                                        @error('content')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="prix1">Prix</label>
                                    <input type="number" class="form-control" id="prix1" placeholder="" name="prix_1">
                                    @error('prix_1')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prix2">Prix</label>
                                    <input type="number" class="form-control" id="prix2" placeholder="" name="prix_2">
                                    @error('prix_2')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prix3">Prix</label>
                                    <input type="number" class="form-control" id="prix3" placeholder="" name="prix_3">
                                    @error('prix_3')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="start">Event Starts</label>
                                        <input type="datetime" class="form-control" id="start" placeholder=""
                                            name="date_debut">
                                        @error('start')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="end">Event Ends</label>
                                        <input type="datetime" class="form-control" id="end" placeholder=""
                                            name="date_fin">
                                        @error('end')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="admin">admin's</label>
                                        <input id="admin" class="form-control" name="user_type" type="text">

                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image">
                                        @error('image')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
