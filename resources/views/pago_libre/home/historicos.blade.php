<!-- @TODOO BOORAR AL ENVIAR -->
@extends('layouts.pago_libre.backend.master')
@section('title', 'Historicos')
@section('pageHeader')
<!-- <div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('img/377.jpg') }}'); min-height:250px; position:relative;">
    <div class="header-custom animated zoomIn text-right">
        <h2>Con pago libre has ahorrado:$89.520</h2>
        <p>Total pagado en PagoLibre ultimos 12 meses: $298.400</p>
        <p>Valor cobrado por distribuidora en los ultimos 12 meses: $387.920</p>
    </div>
</div> -->
@endsection

@section('content')
<h2 class="content-heading">HISTORICOS</h2>
<div class="row">
    <div class="col-md-12">
        <div class="block">
            <ul class="nav nav-tabs" data-toggle="tabs">
                <!-- <li class="active">
                    <a href="#btabs-animated-slideup-resumen">Resumen</a>
                </li> -->
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane fade fade-up in active" id="btabs-animated-slideup-resumen">
                    <h4 class="font-w300 push-15 tituloResumen">Resumen</h4>
                    <p class="text-muted subtituloResumen">Información de la cuenta</p>
                    <!-- FOREACH -->
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
                    <hr>
                    <!-- END FOREACH -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection