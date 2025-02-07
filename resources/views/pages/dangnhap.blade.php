@extends('layouts.index')

@section('content')
    <style>
        .login-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .login-card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .login-title {
            color: #2d3436;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e1e1e1;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
            border-color: #4299e1;
        }

        .login-btn {
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: linear-gradient(45deg, #5fcf86, #7ad89b);
            border: none;
        }

        .login-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(66, 225, 79, 0.2);
        }

        .sign-up__divider {
            color: #718096;
            font-size: 14px;
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
        }

        .sign-up__divider::before,
        .sign-up__divider::after {
            content: '';
            height: 1px;
            flex: 1;
            background-color: #e2e8f0;
        }

        .sign-up__divider::before {
            margin-right: 1rem;
        }

        .sign-up__divider::after {
            margin-left: 1rem;
        }

        .google-login {
            transition: transform 0.3s ease;
        }

        .google-login:hover {
            transform: scale(1.02);
        }
    </style>

    <div class="login-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card login-card border-0">
                        <div class="card-body p-4">
                            <h4 class="login-title text-center mb-4">ĐĂNG NHẬP</h4>
                            @include('layouts.notification')

                            <form action="{{ route('auth.dangnhap') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="text-muted mb-2" for="email">Email</label>
                                    <input type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           id="email"
                                           name="email"
                                           placeholder="Nhập email của bạn"
                                           value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-4">
                                    <label class="text-muted mb-2" for="password">Mật khẩu</label>
                                    <input type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           id="password"
                                           name="password"
                                           placeholder="Nhập mật khẩu của bạn">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary login-btn w-100">
                                    Đăng nhập
                                </button>

                                <div class="sign-up__divider">hoặc</div>

                                <div class="text-center">
                                    <a href="{{ route('auth.google') }}" class="google-login d-inline-block">
                                        <img width="200" src="./upload/images/login.png" alt="Login with Google">
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
