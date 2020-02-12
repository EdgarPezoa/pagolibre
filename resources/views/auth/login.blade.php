@extends('layouts.pago_libre.frontend.master')

@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">        
        <div class="block block-themed animated fadeIn">
            <div class="block-header bg-primary">
                <ul class="block-options">
                    <li>
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </li>
                    <!-- <li>
                        <a href="{{ route('password.request') }}" data-toggle="tooltip" data-placement="left" title="Nueva Cuenta"><i class="si si-plus"></i></a>
                    </li> -->
                </ul>
                <h3 class="block-title">{{ __('Login') }}</h3>
            </div>
            <div class="block-content block-content-full block-content-narrow">                
                <h1 class="h2 font-w600 push-30-t push-5">PagoLibre</h1>
                <p>Bienvenido, Por favor inicie sesión.</p>                                            
                <form class="js-validation-login form-horizontal push-30-t push-50" aria-label="{{ __('Login') }}" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary floating">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="login-username">{{ __('E-Mail Address') }}</label>
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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required value="{{ old('password') }}">
                                <label for="email">{{ __('Password') }}</label>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
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

<!-- Login Footer -->
<div class="push-10-t text-center animated fadeInUp">
<small class="text-muted font-w600">2020 &copy; PagoLibre 1.0</small>
</div>
<!-- END Login Footer -->
@endsection
