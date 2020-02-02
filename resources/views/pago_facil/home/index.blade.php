@extends('layouts.master')
 @section('pageHeader')
 <div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('img/377.jpg') }}');">
    <div class="push-50-t push-15 text-right">
        <h1 class="h2 text-white animated zoomIn">Escritorio</h1>
        <h2 class="h5 text-white-op animated zoomIn">Bienvenido!! {{ Auth::user()->fld_UserName.' '.Auth::user()->fld_UserSurname }}</h2>        
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
                    <a href="#btabs-animated-slideup-historico">Historico</a>
                </li>                
                <li>
                    <a href="#btabs-animated-slideup-otros">Otros</a>
                </li>                
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane fade fade-up in active" id="btabs-animated-slideup-resumen">
                    <h4 class="font-w300 push-15">Home Tab</h4>
                    <p>Content slides up..</p>
                </div>
                <div class="tab-pane fade fade-up" id="btabs-animated-slideup-historico">
                    <h4 class="font-w300 push-15">Profile Tab</h4>
                    <p>Content slides up..</p>
                </div>
                <div class="tab-pane fade fade-up" id="btabs-animated-slideup-otros">
                    <h4 class="font-w300 push-15">Settings Tab</h4>
                    <p>Content slides up..</p>
                </div>
            </div>
        </div>                        
    </div>
</div>    
@endsection