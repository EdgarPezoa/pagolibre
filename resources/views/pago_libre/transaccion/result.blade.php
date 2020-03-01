@extends('layouts.pago_libre.backend.master')
@section('title', 'Dashboard')
@section('pageHeader')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-12">
            <h1 class="page-heading">
                Pago Finalizado
            </h1>
        </div>        
    </div>
</div>
@endsection

@section('content')

<div class="content">
    <h2 class="content-heading">INFORMACIÓN DE PAGO</h2>
    <table class="table">                    
        <tbody>                        
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
            <tr>
                <td>Fecha de Pago</td><td>{{  $response['paymentData']['date'] }}</td>
            </tr>              
            <tr>
                <td>Método de Pago</td><td>{{  $response['paymentData']['media'] }}</td>
            </tr>              
        </tbody>
    </table>    
</div>
@endsection