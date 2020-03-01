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
                            <td>Orden de comercio</td><td>{{ $response['commerceOrder'] }}</td>
                            <td>Descripción</td><td>{{ $response['subject'] }}</td>
                            <td>Monto</td><td>{{ $response['amount'] }}</td>
                            <td>Correo del Pagador</td><td>{{ $response['payer'] }}</td>                                                        
                        </tr>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Demo Content -->
</div>
@endsection