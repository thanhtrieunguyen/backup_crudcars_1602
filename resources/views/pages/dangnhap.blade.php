@extends('layouts.index')

@section('content')
    <style>
        .sign-up__divider {
            color: #969EA2;
            text-align: center;
            font-size: 14px;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
        }

        .sign-up__divider::before,
        .sign-up__divider::after {
            content: '';
            height: 1px;
            flex: 1 0 0;
            background-color: #DADFE2;
        }

        .sign-up__divider::before {
            margin-right: 20px;
        }

        .sign-up__divider::after {
            margin-left: 20px;
        }
    </style>


    <div class="row my-4">
        <div class="col-6 offset-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title text-center text-uppercase mb-4">Đăng nhập</h5>
                    @include('layouts.notification')
                    <div class="my-4">
                        Tài khoản test:
                        <p class="fs-5">Admin: Tài khoản: admin@gmail.com | Mật khẩu: 123456</p>
                        <p class="fs-5">User: Tài khoản: khach5@gmail.com | Mật khẩu: 123456</p>
                    </div>

                    <form action="{{ route('auth.dangnhap') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                id="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                id="password" name="password" placeholder="Nhập mật khẩu">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-4">Đăng nhập</button>
                        <p class="sign-up__divider mt-3">or</p>
                        <div class="my-2" style="display: grid; justify-content: center;">
                            <a href="{{ route('auth.google') }}">
                                <img width="200px" src="./upload/images/login.png">
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
