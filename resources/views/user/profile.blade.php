@extends('user.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid text-dark">
            <div class="row justify-content-center  my-5 mt-4">
                <div>
                    {{-- @include('inc.flash-message') --}}
                    <h2>Client edit profile</h2>
                    <hr>
                    <form action="{{ route('updateProfile_user') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ms-5">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}"
                                id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}"
                                id="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="mb-3 custom-file">
                            @if (auth()->user()->image)
                                <label for="image" class="custom-file-label">Modifier image</label>
                            @else
                                <label for="image" class="custom-file-label">Ajouter image</label>
                            @endif
                            <input class="form-control custom-file-input" name="image" id="image" type="file"
                                placeholder="Tapper image produit...">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
