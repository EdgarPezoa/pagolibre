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
@if(Session::has('success'))
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close closeBtn"><span>&times;</span></button>
        <strong>Éxito: </strong>{{Session::get('success')}}
    </div>
    </div>
</div>
@endif
@if(Session::has('error'))
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close closeBtn" ><span>&times;</span></button>
        <strong>Error: </strong>{{Session::get('error')}}
    </div>
    </div>
</div>
@endif
<h2 class="content-heading">Paga tus cuentas rapido y Seguro !</h2>
<div class="row">
    <div class="col-md-12">
        <div class="block">
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active">
                    <a href="#btabs-animated-slideup-resumen">Resumen de cuenta</a>
                </li>
                <li>
                    <a href="#btabs-animated-slideup-historico">Histórico</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane fade fade-up in active" id="btabs-animated-slideup-resumen">
                    <h4 class="font-w300 push-15 tituloResumen">Resumen</h4>
                    <p class="text-muted subtituloResumen">Información de la cuenta</p>
                    @if(isset($facturas))
                        @foreach($facturas as $contador => $factura)
                            <hr>
                            <div class="resumenContainer">
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">N° de Factura</p>
                                    <p class="valorResumen">{{$factura->fld_Id}}</p>
                                </div>
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">Fecha inicio de facturacion</p>
                                    <p class="valorResumen">{{$factura->fld_InvoiceStartDateTime}}</p>
                                </div>
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">Fecha termino de Facturacion</p>
                                    <p class="valorResumen">{{$factura->fld_InvoiceEndDateTime}}</p>
                                </div>
                            </div>

                            <div class="resumenContainer">
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">Consumo en KW</p>
                                    <p class="valorResumen">{{$factura->fld_InvoiceConsumption}}</p>
                                </div>
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">Valor inicial en KW</p>
                                    <p class="valorResumen">{{$factura->fld_InvoiceStartIndex}}</p>
                                </div>
                                <div class="resumenItem">
                                    <p class="resumenLabelTitle">Valor de termino en KW</p>
                                    <p class="valorResumen">{{$factura->fld_InvoiceEndIndex}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="resumenContainerForm">
                                <div class="resumenItem">
                                    <input type="radio" id="saldo{{$factura->fld_Id}}" name="saldo" value="{{$factura->fld_Id}}">
                                    <label class="resumenLabelTitle" for="saldo{{$factura->fld_Id}}">Saldo vigente: <span>{{'$'.number_format($factura->fld_InvoiceAmount,0,',','.')}}</span></label><br>
                                </div>
                            </div>
                        @endforeach
                        <div class="resumenContainerForm">
                            <div class="resumenItem">
                                {{ Form::open(['route' => 'pagolibre_transaccion.store', 'method' => 'post']) }}
                                    {{Form::hidden('id', null, ['id'=>'id'])}}
                                    {{Form::submit('INICIAR PAGO',['class'=>'btn btn-danger'])}}
                                    <button class="btn btn-primary">VER DETALLES ></button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    @else
                        <h2 class="text-center sinFacturaDashboard">¡No hay facturas disponibles!</h2>
                    @endif
                </div>
                <div class="tab-pane fade fade-up" id="btabs-animated-slideup-historico">
                <h4 class="font-w300 push-15 tituloResumen">Histórico</h4>
                    <p class="text-muted subtituloResumen">Información de la cuenta</p>
                    <hr>
                    <div class="resumenContainer">
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">N° de Cliente</p>
                            <p class="valorResumen">124578451</p>
                        </div>
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">Fecha de vencimiento</p>
                            <p class="valorResumen">13/02/2020</p>
                        </div>
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">Dirección</p>
                            <p class="valorResumen">Av. Providencia #123</p>
                        </div>
                    </div>

                    <div class="resumenContainer">
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">Fecha último pago</p>
                            <p class="valorResumen">13/02/2020</p>
                        </div>
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">Monto último pago</p>
                            <p class="valorResumen">$10.000</p>
                        </div>
                        <div class="resumenItem">
                            <p class="resumenLabelTitle">Corte después de</p>
                            <p class="valorResumen">Sin corte</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection