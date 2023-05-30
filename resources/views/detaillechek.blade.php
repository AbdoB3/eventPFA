@extends('layouts.app')
@section('content')
{{-- <div class="container-fluid ">
    @if ($orders)
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">

                    <tbody class="align-middle">
                        <thead class="bg-dark text-light border-white-50">
                            <tr>
                                <th class=" "scope="col">Event </th>
                                <th class="">image</th>
                                <th class="">Price</th>
                                <th class="">Quantity</th>
                                <th class="">Total</th>
                            </tr>
                        </thead>
                        @foreach ($orders->ligne as $lc)
                            <tr>
                                <td class="align-middle">{{ $lc->events->titre }}<img src="" alt="" style="width: 50px;"></td>
                                <td class="align-middle"><img src="{{ $lc->events->image }}" alt="" width="100" height="100" class="bi-circle" ></td>
                                <td class="align-middle">{{ $lc->price }} $</td>
                                <td class="align-middle">{{ $lc->qte }}</td>
                                <td class="align-middle">{{ $lc->int(price) * $lc->int(qte) }} $</td>
                                <td class="align-middle"><a href="/guests/lc/{{ $lc->id }}/destroy" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a href=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @else
    <div class="row px-xl-5 ">
        <div class="col-lg-8 table-responsive mb-5 ">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-danger text-light border-white-50">
                    <tr>
                        <th class="btn-light "scope="col">Event </th>
                        <th class="btn-light">Price</th>
                        <th class="btn-light">Quantity</th>
                        <th class="btn-light">Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle border-white-50">
                        <tr>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
                <div class="card mb-5">
                    <div class="card-header bg-danger border-0">
                        <h4 class="fw-bolder m-0 ">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">0 DH</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">0 DH</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">0 DH</h5>
                        </div>
                        <a href="/client/checkout" class="btn btn-block btn-light my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
        </div>
    </div>
    @endif
</div> --}}
<div class="container px-3 my-5 clearfix" style="filter: drop-shadow(0.50rem 0.50rem 0.50rem rgb(113, 107, 108))" >
    @if ($orders)
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;"></th>
                    <th class="text-right py-3 px-4 text-center" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders->ligne as $lc)

                  <tr>
                    <td class="p-4 ">
                      <div class="media align-items-center">
                        <img src="{{ $lc->events->image }}" class=" " height="175px" width="250px" alt="" style="border-radius:12px;background-size:cover;filter: drop-shadow(0.50rem 0.50rem 0.50rem rgb(113, 107, 108))">
                        <a href="#" class="  ms-5 text-dark fs-3 text-bold fw-bold">{{ $lc->events->titre }}</a>
                        <div class="media-body">

                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted"></span>

                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4 text-center" >{{ $lc->price }} $</td>
                    <td class="align-middle p-4 text-center">{{ $lc->qte }}</td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ $lc->price * $lc->qte }} $</td>
                    <td class="text-center align-middle px-0"><a href="/guests/lc/{{ $lc->id }}/destroy" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
            {{-- <!-- / Shopping cart table -->

            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>{{ $lc->int(price) * $lc->int(qte) }}</strong></div>
                </div>
              </div>
            </div> --}}

           <h1>{{ $orders->getTotal() }} $</h1>

            <div class="float-right mt-5">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <a class="btn btn-lg btn-primary mt-2 btn" href="stripe">Checkout</a>
            </div>

          </div>
      </div>
  </div>
  @endif
@endsection
