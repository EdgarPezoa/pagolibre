@extends('layouts.pago_libre.backend.master')
@section('title', 'Dashboard')
@section('pageHeader')
<div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('img/377.jpg') }}'); min-height:250px; position:relative;">
    <div class="header-custom animated zoomIn text-right">
        <h2>Con pago libre has ahorrado:$89.520</h2>
        <p>Total pagado en PagoLibre ultimos 12 meses: $298.400</p>
        <p>Valor cobrado por distribuidora en los ultimos 12 meses: $387.920</p>
    </div>
</div>
@endsection

@section('content')
<h2 class="content-heading">Paga tus cuentas rapido y Seguro !</h2>
<div class="row">
    <div class="col-md-12">
        <div class="block">
        
        {{ print_r($response) }}

        </div>
    </div>
</div>
@endsection