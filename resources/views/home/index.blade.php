@extends('layouts.home.backend.master')
@section('pageHeader')
 <div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('img/377.jpg') }}'); min-height:250px; position:relative;">
    <div class="header-custom animated zoomIn text-right">
        <h2>INDEX</h2>
        <p>Total pagado en PagoLibre ultimos 12 meses: $298.400</p>
        <p>Valor cobrado por distribuidora en los ultimos 12 meses: $387.920</p>
    </div>    
</div>
@endsection

@section('content')
<h1>INDEX</h1>
<h2 class="content-heading"><a href="{{route('login')}}">LOGEATE</a></h2>
<div class="row">        
    <div class="col-md-12">            
        
    </div>
</div>    
@endsection