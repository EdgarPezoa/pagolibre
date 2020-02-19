@extends('layouts.pago_libre.frontend.master')
@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">        
        <div class="block block-themed animated fadeIn">
            <div class="block-header bg-primary">               
                <h3 class="block-title">{{ __('Reset Password') }}</h3>
            </div>
            <div class="block-content block-content-full block-content-narrow">                
                <h1 class="h2 font-w600 push-30-t push-5">KIO</h1>
                <p>Por favor, Restablezca su contraseña.</p>                                            
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="js-validation-login form-horizontal push-30-t push-50" aria-label="{{ __('Reset Password') }}" action="{{ route('password.email') }}" method="POST">
                    @csrf                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary floating">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="email">{{ __('E-Mail Address') }}</label>
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
                            <button class="btn btn-block btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>        
    </div>
</div>

<div class="push-10-t text-center animated fadeInUp">
<small class="text-muted font-w600">2020 &copy; KIO 1.0</small>
</div>
@endsection                                           