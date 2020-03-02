@extends('layouts.pago_libre.backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="flexCenter">
    <div class="pago-container">
        <div class="col-sm-12">
            <h1 class="page-heading">
                Pago {{ $estado }}
            </h1>
        </div> 
        <div class="content">
            <h2 class="content-heading">Información</h2>
            <div class="col-md-12">
                <table class="table table-striped table-borderless table-header-bg">                    
                    <tbody> 
                        <thead class="thead-dark">
                            <tr><th>Dato</th><th></th></tr>
                        </thead>
                        <tr>
                            <td>Orden Flow</td><td>{{ $response['flowOrder'] }}</td>
                        </tr>
                        <tr>
                            <td>Orden de comercio</td><td>{{ $response['commerceOrder'] }}</td>
                        </tr>
                        <tr>
                            <td>Descripción</td><td>{{ $response['subject'] }}</td>
                        </tr>
                        <tr>
                            <td>Monto</td><td>{{ $response['amount'] }}</td>
                        </tr>
                        <tr>
                            <td>Correo del Pagador</td><td>{{ $response['payer'] }}</td>
                        </tr>
                        @if($response['paymentData']['date'] && $response['paymentData']['media'])
                            <tr>
                                <td>Fecha de Pago</td><td>{{  $response['paymentData']['date'] }}</td>
                            </tr>
                            <tr>
                                <td>Método de Pago</td><td>{{  $response['paymentData']['media'] }}</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="pagoVolver">
                    <a class="btn btn-primary" href="">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection