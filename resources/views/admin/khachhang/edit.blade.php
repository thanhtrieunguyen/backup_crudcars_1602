@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-6 offset-3">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Cập nhật khách hàng <small
                                    class="text-muted">{{ $khachHang->hoten }}</small></h5>
                        </div>
                        <div>
                            <a href="{{ route('user.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('user.update', $khachHang->iduser) }}" class="mb-3" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" disabled class="form-control" id="email"
                                value="{{ $khachHang->email }}">
                            <small class="form-text text-muted">Mật khẩu mặc định là 12346</small>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="hoTen">Họ tên</label>
                                <input type="text" class="form-control{{ $errors->has('hoten') ? ' is-invalid' : '' }}"
                                    id="hoTen" name="hoten" placeholder="Nhập họ tên" required
                                    value="{{ $khachHang->hoten }}">

                                @if ($errors->has('hoten'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hoten') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="cccd">Căn cước công dân</label>
                                <input type="text" disabled class="form-control{{ $errors->has('cccd') ? ' is-invalid' : '' }}" id="cccd"
                                    value="{{ $khachHang->cccd }}" name='cccd'>
                                <a href="#" id="enableInput">Bạn muốn điểu chỉnh CCCD?</a>
                                @if ($errors->has('cccd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cccd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="ngaySinh">Ngày sinh (mm/dd/yyyy)</label>
                                <input type="date" class="form-control js_my_date_picker" id="ngaySinh" name="ngaysinh"
                                    placeholder="Chọn ngày sinh" required value="{{ $khachHang->ngaysinh }}">
                            </div>
                            <div class="col-md-6">
                                <label for="soDienThoai">Số điện thoại</label>
                                <input type="text" class="form-control{{ $errors->has('sdt') ? ' is-invalid' : '' }}"
                                    id="soDienThoai" name="sdt" placeholder="Nhập số điện thoại" required
                                    value="{{ $khachHang->sdt }}">

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
                                name="diachi" rows="2" placeholder="Nhập địa chỉ" required>{{ $khachHang->diachi }}</textarea>

                            @if ($errors->has('diachi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('diachi') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <button type="reset" class="btn btn-secondary mr-3"><i class="fas fa-sync-alt"></i> Làm
                                mới</button>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('enableInput').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            document.getElementById('cccd').disabled = false; // Enable the input field
        });
    </script>
@endsection
