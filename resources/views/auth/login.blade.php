@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1 class="panel-title">Acceso a la aplicación</h1>
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>

                                <input
                                id="email"
                                type="email" class="form-control"
                                name="email"
                                placeholder="Ingresa tu email "
                                value="{{ old('email') }}"
                                required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>

                                <input
                                id="password"
                                type="password" class="form-control"
                                name="password"
                                placeholder="Ingresa tu contraseña"
                                required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group text-left">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidé mi contraseña
                                </a>
                                </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">
                                 <i class="material-icons center-text">fingerprint</i>  Acceder</button><br><br>
                                <h1 class="panel-title text-center">Puedes hacer login con:</h1>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="{{route('login.facebook')}}" class="btn btn-facebook">
                        <i class="fa fa-facebook-f"></i>
                        Facebook
                    </a>
                        <a href="#" class="btn btn-twitter">
                        <i class="fa fa-twitter"></i>
                         Twitter
                    </a>
                        <a href="#" class="btn btn-google">
                        <i class="fa fa-google-plus"></i>
                        Google
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
