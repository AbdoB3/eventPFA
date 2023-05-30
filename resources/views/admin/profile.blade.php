@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center my-5 mt-4">
                <div>
                    {{-- @include('inc.flash-message') --}}
                    <h3 class="text-white">Client edit profile</h3>
                    <hr class="bg-white">
                    <form action="/updateProfile" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group ms-5">
                            <label for="name">Username</label>
                            <div class="input-group transparent-append">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" class="form-control " name="name"
                                    value="{{ auth()->user()->name }}" id="name">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input type="email" class="form-control" name="email"
                                    value="{{ auth()->user()->email }}" id="email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password ">Mot de passe</label>
                            <div class="input-group transparent-append">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" class="form-control " name="password" id="password">
                            </div>
                            <br>
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
                                {{-- <div class="">
                                    <input type="file" class="custom-file-input">
                                    <label class="">Choose file</label>
                                </div> --}}
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
