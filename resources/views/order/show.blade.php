@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? 'Show Order' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ordersdetails Id:</strong>
                            {{ $order->ordersdetails_id }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $order->users_id }}
                        </div>
                        <div class="form-group">
                            <strong>Num Orden:</strong>
                            {{ $order->num_orden }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $order->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $order->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $order->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
