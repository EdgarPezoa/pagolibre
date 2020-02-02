@extends('layouts.master')
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
                    <a href="#btabs-animated-slideup-resumen">Resumen</a>
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
                    <h4 class="font-w300 push-15">Resumen</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, magnam neque ullam dignissimos quaerat doloribus maiores facilis quae incidunt alias cum, totam iusto vero mollitia? Consequuntur alias ducimus debitis dolor?</p>
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