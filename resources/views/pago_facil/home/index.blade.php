@extends('layouts.master')
 @section('pageHeader')
 <div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('img/377.jpg') }}');">
    <div class="push-50-t push-15 text-right">
        <h1 class="h2 text-white animated zoomIn">Panel</h1>
        <h2 class="h5 text-white-op animated zoomIn">Bienvenido @user-name</h2>
    </div>
</div>
@endsection