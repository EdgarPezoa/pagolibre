@extends('layouts.home.backend.master')

@section('title','Home')
@section('cssClass','home')
@section('cssPage')
<style>
.homeImagebackground{
    background-image: url('img/377.jpg');
    height: 600px;
  }
</style>
@endsection

@section('content')
<div class="col-md-4">
    <img src="" alt="">
</div>
<div class="col-md-8">
    <div class="homeImagebackground">
        <h1 class="text-center homeTitle">PLATAFORMA DE PAGOS PARA COMUNIDADES QUE OPERAN COMO <span>CLIENTES LIBRE</span></h1>
    </div>
</div>
@endsection