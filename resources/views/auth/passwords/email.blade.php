@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Restablece tu contraseña</div>

                <div class="panel-body">
                     <p>Ingresa tu email aquí debajo para enviarte las instrucciones de cómo reestablecer tu contraseña</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><i class="material-icons center-text">markunread</i></label>

                            <div class="col-md-6">
                                <input
                                id="email"
                                type="email" class="form-control"
                                name="email" value="{{ old('email') }}"
                                placeholder="Email..."
                                required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-envelope"></i>
                                    ENVIAME LAS INSTRUCCIONES
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
