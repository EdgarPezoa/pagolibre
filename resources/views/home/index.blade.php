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

 
 <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">                
                <div class="block-content">
                    <div class="row">
                        <div class="col-12">        
                            <div class="block block-themed animated fadeIn block-custom">
                                <div class="block-header bg-primary">
                                    <ul class="block-options">
                                        <li>
                                            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        </li>
                                        <!-- <li>
                                            <a href="{{ route('password.request') }}" data-toggle="tooltip" data-placement="left" title="Nueva Cuenta"><i class="si si-plus"></i></a>
                                        </li> -->
                                    </ul>                                    
                                </div>
                                <div class="block-content block-content-full block-content-narrow">                
                                    <h1 class="h2 font-w600 push-30-t push-5">PagoLibre</h1>
                                    <p>Bienvenido, Por favor inicie sesión.</p>                                            
                                    <form class="js-validation-login form-horizontal push-30-t push-50" aria-label="{{ __('Login') }}" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material form-material-primary floating">
                                                    <input id="email" placeholder="{{ __('E-Mail Address') }}" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>                                                    
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material form-material-primary floating">
                                                    <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required value="{{ old('password') }}">                                                    
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group custom-recuerdame">
                                            <div class="col-xs-12">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span></span> {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> {{ __('Login') }}</button>
                                            </div>
                                        </div>
                                    </form>                
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection

@section('custom-js')
    @if ($errors->has('email') || $errors->has('password'))
    <script>
        jQuery(document).ready(function () {
            jQuery('.btnLogin').trigger('click');
        });
    </script>
    @endif
@endsection