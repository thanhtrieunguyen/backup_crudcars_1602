@extends('layouts.index')

@section('content')
    <style>
        .register-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
            padding: 2rem 0;
        }

        .register-card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .register-title {
            color: #2d3436;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e1e1e1;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
            border-color: #4299e1;
        }

        .register-btn {
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: linear-gradient(45deg, #5fcf86, #7ad89b);
            border: none;
        }

        .register-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(66, 225, 79, 0.2);
        }
    </style>

    <div class="register-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card register-card border-0">
                        <div class="card-body p-4">
                            <h4 class="register-title text-center mb-4">ĐĂNG KÝ</h4>
                            @include('layouts.notification')

                            <form action="{{ route('auth.dangky') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" placeholder="Mật khẩu">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="password_confirmation" placeholder="Xác nhận mật khẩu">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control{{ $errors->has('hoten') ? ' is-invalid' : '' }}"
                                            name="hoten" placeholder="Họ và tên" value="{{ old('hoten') }}">
                                        @if ($errors->has('hoten'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hoten') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control{{ $errors->has('cccd') ? ' is-invalid' : '' }}"
                                            name="cccd" placeholder="CCCD" value="{{ old('cccd') }}">
                                        @if ($errors->has('cccd'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cccd') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="ngaysinh"
                                            value="{{ old('ngaysinh') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control{{ $errors->has('sdt') ? ' is-invalid' : '' }}"
                                            name="sdt" placeholder="Số điện thoại" value="{{ old('sdt') }}">
                                        @if ($errors->has('sdt'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sdt') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control{{ $errors->has('diachi') ? ' is-invalid' : '' }}"
                                        name="diachi" rows="2" placeholder="Địa chỉ">{{ old('diachi') }}</textarea>
                                    @if ($errors->has('diachi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('diachi') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary register-btn w-100">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
