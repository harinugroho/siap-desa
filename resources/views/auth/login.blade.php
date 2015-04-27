@extends('app')

@section('content')
    <div class="form-signin">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/auth/login') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input autofocus placeholder="Masukkan email" type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                </div>
            </div>
            <center><button type="submit" class="btn btn-default" id="loginButton" data-loading-text="Logging in...">Login</button></center>
        </form>
    </div>
    <script>
        $('#loginButton').on('click', function () {
            var $btn = $(this).button('loading')
            // business logic...
            $btn.button('reset')
        })
    </script>
@endsection
