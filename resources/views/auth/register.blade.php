@extends('app')

@section('content')
<div class="container auth">
    <div class="row m-5">
        <div class="col-md-6">
            <img src="{{asset('img/Plan de travail – 1.png')}}" alt="" height="430px" width="470px">
        </div>
        <div class="col-md-6">
            <h4>Vous avez deja un compte? <a href="http://127.0.0.1:8000/login" class="text-center">connectez vous</a></h4>
            <div class="card">
                @if(config('app.shop_registration'))
                    <div class="card-header">{{ __('Merchant registration') }}</div>
                @else
                    <div class="card-header">{{ __('Registration') }}</div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            @if(config('app.shop_registration'))
                                <label for="code" class="col-md-5 col-form-label text-md-right">{{ __('Account') }}</label>

                                <div class="col-md-7">
                                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                                        name="code" value="{{ old('code') }}" required autocomplete="off" autofocus
                                        placeholder="{{ __('Characters, numbers and dashes') }}">

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @else
                                <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="off" autofocus
                                        placeholder="{{ __('votre nom') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Addresse E-mail') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="{{ __('addresse e-mail Valid') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Mot De Passe') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="{{ __('8 characteres minimum') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirmez votre Mot de passe') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="{{ __('Repetez le Mot de pass') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    @if(config('app.shop_registration'))
                                        {{ __('Register as merchant') }}
                                    @else
                                        {{ __('Register') }}
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
