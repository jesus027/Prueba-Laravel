@extends('layouts.app')

@section('template_title')
    {{ $ordersdetail->name ?? 'Show Ordersdetail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ordersdetail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordersdetails.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Articulo:</strong>
                            {{ $ordersdetail->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $ordersdetail->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $ordersdetail->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $ordersdetail->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
