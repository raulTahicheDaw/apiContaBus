@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text"
                                           class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                           name="lastName" value="{{ old('lastName') }}" required>

                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="driverId"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Driver Number') }}</label>

                                <div class="col-md-6">
                                    <input id="driverId" type="text"
                                           class="form-control{{ $errors->has('driverId') ? ' is-invalid' : '' }}"
                                           name="driverId" value="{{ old('driverId') }}">

                                    @if ($errors->has('driverId'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('driverId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="text"
                                           class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                                           name="telephone" value="{{ old('telephone') }}">

                                    @if ($errors->has('telephone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="otherTelephone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Other Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="otherTelephone" type="text"
                                           class="form-control{{ $errors->has('otherTelephone') ? ' is-invalid' : '' }}"
                                           name="otherTelephone" value="{{ old('otherTelephone') }}">

                                    @if ($errors->has('otherTelephone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('otherTelephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           name="address" value="{{ old('address') }}">

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="companyId"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                                <div class="col-md-6">
                                    <input id="companyId" type="text"
                                           class="form-control{{ $errors->has('companyId') ? ' is-invalid' : '' }}"
                                           name="companyId" value="{{ old('companyId') }}" required autofocus>

                                    @if ($errors->has('companyId'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('companyId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
