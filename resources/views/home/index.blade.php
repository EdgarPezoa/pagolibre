@extends('layouts.home.backend.master')

@section('title','Home')
@section('cssClass','home')
@section('cssPage')
<style>
.homeImagebackground{
    background-image: url('img/377.jpg');
    height: 80vh;
  }
</style>
@endsection

@section('content')

<div class="col-md-12 pl-0 pr-0">
    <div class="homeImagebackground">
        <h1 class="text-center homeTitle">PLATAFORMA DE PAGOS PARA COMUNIDADES QUE OPERAN COMO <span>CLIENTES LIBRES</span></h1>
    </div>
</div>
@endsection