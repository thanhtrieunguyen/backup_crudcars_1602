@extends('layouts.index')

@section('content')
    <div class="row my-4">
        <div class="col-6 offset-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title text-center text-uppercase mt-4">Đăng ký</h5>
                    @include('layouts.notification')
                    <form action="{{ route('auth.dangky') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" placeholder="Nhập email"  value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" placeholder="Nhập mật khẩu" >

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Nhập lại mật khẩu" >
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('hoten') ? ' is-invalid' : '' }}"
                                    name="hoten" placeholder="Nhập họ tên"  value="{{ old('hoten') }}">

                                @if ($errors->has('hoten'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hoten') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('cccd') ? ' is-invalid' : '' }}"
                                    name="cccd" placeholder="Nhập CCCD"  value="{{ old('cccd') }}">

                                @if ($errors->has('cccd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cccd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="ngaysinh" placeholder="Chọn ngày sinh"
                                     value="{{ old('ngaysinh') }}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('sdt') ? ' is-invalid' : '' }}"
                                    name="sdt" placeholder="Nhập số điện thoại"  value="{{ old('sdt') }}">

                                @if ($errors->has('sdt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sdt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control{{ $errors->has('diachi') ? ' is-invalid' : '' }}" name="diachi"
                                rows="2" placeholder="Nhập địa chỉ" >{{ old('diachi') }}</textarea>

                            @if ($errors->has('diachi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('diachi') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-4">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
