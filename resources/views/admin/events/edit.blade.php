@extends('admin.layouts.app')
@section('title', 'Modifier une events')
@section('content')


    <div class="col-md-6 offset-md-3">
        <div class="card mt-5 shadow">
            <div class="card-body text-black">
                <form action="{{ route('event.update', $events->id) }}" method="POST" class="text-black">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="titre">titre</label>
                        <input type="text" value="{{ $events->titre }}"
                            class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre">
                        @error('titre')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="category">category</label>
                        <select type="text" class="form-control @error('category_id') is-invalid @enderror"
                            id="category" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                    </div>
                    <div class="form-group mb-3">
                        <label for="ville">ville</label>
                        <select type="text" value="{{ $events->villes->name }}"
                            class="form-control @error('villes_id') is-invalid @enderror" id="ville" name="villes_id">
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                            @endforeach
                        </select>
                        @error('villes_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Content</label>
                        <input type="text" value="{{ $events->content }}"
                            class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                        @error('content')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prix">Prix 1/label>
                        <input type="text" value="{{ $events->prix_1 }}"
                            class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix_1">
                        @error('prix_1')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prix">Prix 2</label>
                        <input type="text" value="{{ $events->prix_2 }}"
                            class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix_2">
                        @error('prix_2')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prix">Prix 3</label>
                        <input type="text" value="{{ $events->prix_3 }}"
                            class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix_3">
                        @error('prix_3')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="start">start</label>
                        <input type="text" value="{{ $events->date_debut }}"
                            class="form-control @error('date_debut') is-invalid @enderror" id="start" name="date_debut">
                        @error('date_debut')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="end">end</label>
                        <input type="text" value="{{ $events->date_fin }}"
                            class="form-control @error('date_fin') is-invalid @enderror" id="end" name="date_fin">
                        @error('date_fin')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="admin">admin</label>
                        <input type="text" value="{{ $events->user_type }}"
                            class="form-control @error('user_type') is-invalid @enderror" id="admin" name="user_type">
                        @error('user_type')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image">
                        @error('image')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn btn-primary w-100">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
