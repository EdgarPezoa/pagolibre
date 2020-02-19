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
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active">
                    <a href="#btabs-animated-slideup-resumen">Resumen de cuenta</a>
                </li>
                <li>
                    <a href="#btabs-animated-slideup-historico">Histórico</a>
                </li>
                <li>
                    <a href="#btabs-animated-slideup-otros">Otros</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane fade fade-up in active" id="btabs-animated-slideup-resumen">
                    <h4 class="font-w300 push-15 tituloResumen">Resumen</h4>
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

                    <hr>

                    <div class="resumenContainerForm">
                        <div class="resumenItem">
                            <input type="radio" id="saldo" name="saldo" value="saldo">
                            <label class="resumenLabelTitle" for="saldo">Saldo vigente: <span> $10.000</span></label><br>
                        </div>
                        <div class="resumenItem">
                            <button class="btn btn-danger">INICIAR PAGO</button>
                            <button class="btn btn-primary">VER DETALLES -></button>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade fade-up" id="btabs-animated-slideup-historico">
                    <h4 class="font-w300 push-15">Histórico</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa id repellendus praesentium repellat provident temporibus in recusandae magni? Rem voluptas repellat reprehenderit quae aperiam laboriosam commodi architecto eum amet voluptate?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit autem placeat excepturi iusto quo illum odio sint voluptate recusandae incidunt porro obcaecati amet quis, repellat itaque. Modi odit distinctio nihil.</p>
                </div>
                <div class="tab-pane fade fade-up" id="btabs-animated-slideup-otros">
                    <h4 class="font-w300 push-15">Otros</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, magnam neque ullam dignissimos quaerat doloribus maiores facilis quae incidunt alias cum, totam iusto vero mollitia? Consequuntur alias ducimus debitis dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, magnam neque ullam dignissimos quaerat doloribus maiores facilis quae incidunt alias cum, totam iusto vero mollitia? Consequuntur alias ducimus debitis dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, magnam neque ullam dignissimos quaerat doloribus maiores facilis quae incidunt alias cum, totam iusto vero mollitia? Consequuntur alias ducimus debitis dolor?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection