<form class="form-horizontal" method="POST" action="{{ route('administrador.login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
        <label for="correo" class="col-md-4 control-label">Correo</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}" required autofocus>

            @if ($errors->has('correo'))
                <span class="help-block">
                    <strong>{{ $errors->first('correo') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Contraseña</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Login
            </button>

            <a class="btn btn-link" href="#">
                Forgot Your Password?
            </a>
        </div>
    </div>
</form>
