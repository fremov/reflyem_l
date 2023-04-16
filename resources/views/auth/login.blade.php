<x-head />
<x-preloader />
<body>
<div class="container-fluid d-flex h-100 justify-content-center align-items-center bg-dark">
    <div
        class="row justify-content-center w-50">
        <div class="col-md-8">
            <div class="card border-light bg-dark text-white">
                <div class="card-header bg-primary">{{ ('Вход') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="text-white mb-3 col-md-4 col-form-label text-md-right">{{ ('E-Mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control"
                                       name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text-white mb-3 col-md-4 col-form-label text-md-right">{{ ('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"
                                       name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div
                            class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="mb-3 form-check-input" type="checkbox" name="remember" id="remember" {{ ('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ ('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="text-center btn btn-primary">
                                    {{ ('Войти') }}
                                </button>
                            </div>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
