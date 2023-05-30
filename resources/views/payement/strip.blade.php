@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-4 text-danger ms-5">DEMANDE DE PAIEMENT</h1>
        <hr class="text-danger mt-4 ms-3 me-2" style=" height: 4px ; width:1000px">
        <div class="row  col-md-7 me-5 ">
            <div class="col-md-2 ms-4 me-4">

            </div>
            <div class=" row">

                <div class="panel panel-default credit-card-box">

                    <div class="panel-body">
                        <h3 class="mb-2">DÉTAIL DE PAIEMENT </h3>

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form role="form" action="{{ route('checkout') }}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf

                            <input type="hidden" name="orders" value="{{ $orders->id }}">

                            <div class='form-row row mt-5'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row mt-3'>
                                <div class='col-xs-12 form-group '>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row mt-4'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required '>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>

                            <input type="hidden" name="total" value="{{ $orders->getTotal() }}">
                            <input type="hidden" name="name" value="{{ $orders->client->name }}">


                            <div class="row">

                            </div>
                            <div class="row mt-5">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay
                                        {{ $orders->getTotal() }} $</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ms-5 mt-5">
            <div class=" row ">

                <div class="card text-center">
                    <div class="bg-light">
                        <h5 class="card-title">DÉTAIL DE LA COMMANDE</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text mt-3">
                            Identifiant :</p>
                        <p class="card-text mt-3">
                            Montant : {{ $orders->getTotal() }} $</p>

                    </div>

                </div>
            </div>
            <div class=" row ">

                <div class="card text-center mt-5">
                    <div class="bg-light ">
                        <h5 class="card-title">INFORMATIONS DU CLIENT</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text mt-3 "style="margin-right: 127px" >
                            Nom : {{ Auth::user()->name }}</p>
                        <p class="card-text mt-3" style="margin-right: 0px">
                            E-mail : {{ Auth::user()->email }} </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
