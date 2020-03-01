@extends('layouts.pago_libre.backend.master')
@section('title', 'Dashboard')
@section('pageHeader')

@endsection

@section('content')
<div class="content content-boxed">
    <!-- Demo Content -->
    <div class="block block-rounded">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Demo Content</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
            <div class="push-30 push-30-t">
                {{ print_r($response) }}

                <h3>Datos de Facturación</h3>
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
                            <td>Información de Pago</td>    
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
        </div>
    </div>
    <!-- END Demo Content -->
</div>
@endsection