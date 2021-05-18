@extends('layouts.auth')

@section('content')
    <div class="container h-100 my-5">
        <div class="row py-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Войти в личный кабинет
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="loginFormEmail" class="form-label">Email</label>
                                <input required name="email" placeholder="Введите Email" type="email" class="form-control" id="loginFormEmail">
                            </div>
                            <div class="mb-3">
                                <label for="loginFormPassword" class="form-label">Пароль</label>
                                <input name="password" placeholder="Введите пароль" type="password" class="form-control" id="loginFormPassword">
                            </div>
                            <div class="mb-3 form-check">
                                <input name="remember" class="form-check-input" type="checkbox" value="" id="loginFormRememberMe" checked>
                                <label required class="form-check-label" for="loginFormRememberMe">
                                    Запомнить меня
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Войти</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
