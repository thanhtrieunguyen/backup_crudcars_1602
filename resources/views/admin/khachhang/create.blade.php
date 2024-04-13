@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Thêm khách hàng</h5>
                        </div>
                        <div>
                            <a href="{{ route('user.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('user.store') }}" class="mb-3" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email"><strong style="font-weight: 600">Email</strong><strong
                                    style="font-weight: 600" class="important" aria-label="Required">(*)</strong></label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                id="email" name="email" placeholder="Nhập email" required value="{{ old('email') }}">
                            <small class="form-text text-muted">Mật khẩu mặc định là 12346</small>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="hoTen"><strong style="font-weight: 600">Họ tên</strong><strong
                                        style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong></label>
                                <input type="text" class="form-control{{ $errors->has('hoten') ? ' is-invalid' : '' }}"
                                    id="hoTen" name="hoten" placeholder="Nhập họ tên" required
                                    value="{{ old('hoten') }}">

                                @if ($errors->has('hoten'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hoten') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="cccd"><strong style="font-weight: 600">Căn cước công dân</strong><strong
                                        style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong></label>
                                <input type="text"
                                    class="w-50 mr-3 form-control{{ $errors->has('cccd') ? ' is-invalid' : '' }}"
                                    id="cccd" name="cccd" placeholder="Nhập CCCD" required
                                    value="{{ old('cccd') }}" style="display:inline" oninput="formatNumber(this)">
                                <small class="text-muted">Phải có
                                    12 số.</small>

                                @if ($errors->has('cccd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cccd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="ngaySinh"><strong style="font-weight: 600">Ngày sinh</strong><strong
                                        style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong></label>
                                <input type="date" class="form-control" id="ngaySinh" name="ngaysinh"
                                    placeholder="Chọn ngày sinh" required value="{{ old('ngaysinh') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="soDienThoai"><strong style="font-weight: 600">Số điện thoại </strong><strong
                                        style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong></label>
                                <input type="text"
                                    class="w-50 mr-3 form-control{{ $errors->has('sdt') ? ' is-invalid' : '' }}"
                                    id="soDienThoai" name="sdt" placeholder="Nhập số điện thoại" required
                                    value="{{ old('sdt') }}" style="display:inline" oninput="formatNumber(this)">
                                <small class="text-muted">Phải có 10 số.</small>

                                @if ($errors->has('sdt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sdt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diaChi">Địa chỉ</label>
                            <textarea type="text" class="form-control{{ $errors->has('diachi') ? ' is-invalid' : '' }}" id="diaChi"
                                name="diachi" rows="2" placeholder="Nhập địa chỉ">{{ old('diachi') }}</textarea>

                            @if ($errors->has('diachi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('diachi') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <button type="reset" class="btn btn-secondary mr-3"><i class="fas fa-sync-alt"></i> Làm
                                mới</button>
                            <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
