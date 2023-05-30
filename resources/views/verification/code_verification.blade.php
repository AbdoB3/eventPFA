@extends('layouts.app')
@section('content')
    <div class="page-title mt-5 pt-5">
        <div class="container">
            <div class="page-caption">
                <h2>vérifiez votre code</h2>

            </div>
        </div>
    </div>

    <section class="padd-top-80 padd-bot-80">
        <div class="container">
            <div class="log-box">
                <form class="log-form" method="POST" action="{{ route('code.verify', $user->email)}}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="code"> copiez votre code dans le champ suivant:</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code">
                        @error('code')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn btn-primary w-100">Verifier</button>
                    </div>

                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
