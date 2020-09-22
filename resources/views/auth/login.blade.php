<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">
    @guest
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf

            <img class="mb-4" src="{{ asset('img/progeo12.png') }}" alt="" width="300" height="46">

            <div class="text-center">
                <label for="email" class="sr-only">Usuário</label>

                <div class="col-md-14">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="Usuário" required autocomplete="email" autofocus="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        Usuário ou Senha incorretos.
                    </span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <label for="password" class="sr-only">Senha</label>

                <div class="col-md-14">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Senha" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        Usuário ou Senha incorretos.
                    </span>
                    @enderror
                </div>
            </div>

            <div class="checkbox mb-2">
                <label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    {{ __('Lembrar-Me') }}
                </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

            <p class="mt-5 mb-3 text-muted">Copyright &copy; PROGEO 2020</p>

        </form>
    @endguest

</body>

</html>
