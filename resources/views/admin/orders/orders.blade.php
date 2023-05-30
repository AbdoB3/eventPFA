@extends('admin.layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Bootstrap</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Table Hover</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>tickets</th>
                                            <th>payements Statuts</th>
                                            <th>Total</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $key => $order)
                                                <tr>
                                                    <th>{{ $order->client->name }}</th>
                                                    <td><span class="badge badge-success">{{ $order->etat }}</span></td>
                                                    <td><span class="badge badge-primary">{{ $order->getTotal() }}</span>
                                                    </td>

                                                    <td class="color-primary">{{ $order->created_at }}</td>
                                                </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>



            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
