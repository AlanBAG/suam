@extends('layouts.app')

@section('title', 'Acceso. SUAM')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-md-offset-1">
                @if (session('message'))
                    <div class="alert alert-success">
                        <h2>{{ session('message') }}</h2>

                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5 class="tittle">Acceso</h5>
                        <hr>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>

                                <input id="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Ingrese aquí su correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}"
                                x-data="{ show: false }">
                                <span class="input-group-text"><i class="now-ui-icons ui-1_lock-circle-open"></i></span>
                                <input id="password" :type="show ? 'text' : 'password'"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Ingrese aquí su contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- ========== Start show - hide icon========== -->
                                <br>
                                <button style="border: 0ch" type="button" @click="show = !show"
                                    :class="{ 'hidden': !show, 'block': show }">
                                    Mostrar
                                </button>
                                <button style="border: 0ch" type="button" @click="show = !show"
                                    :class="{ 'hidden': show, 'block': !show }">
                                    Ocultar
                                </button>
                                <!-- ========== End show - hide icon========== -->


                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <br>
                                            <h6>
                                                <p>
                                                    IMPORTANTE: Si ya fue alumno nuestro, por favor acceda con su nombre de
                                                    usuario y contrase&ntildea, de no recordarlos comun&iacute;quese con
                                                    administraci&oacute;n a los siguientes n&uacute;meros 33-31-06-71-60 o
                                                    al 33-14-08-43-24</p>
                                                <br>
                                                <p>El nombre de usuario es su apellido paterno en minúsculas y su año de
                                                    nacimiento o su apellido paterno, el mes y su año de nacimiento.
                                                    <br>Ejemplo: perez1955
                                                </p>
                                                <p>La contraseña es su apellido paterno en minúsculas y su día de
                                                    nacimiento. <br>Ejemplo: perez05</p>
                                            </h6>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="remember">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            Mantener sesión
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Acceder') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvido la contraseña') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-md-offset-1">
                @include('layouts.partials.footer')
            </div>
        </div>
    </div>
@endsection
