@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card border-0 rounded-lg shadow">
                <div class="card-body">
                    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="true">Thông tin cá nhân</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-history-tab" data-toggle="pill" href="#pills-history"
                                role="tab" aria-controls="pills-history" aria-selected="false">Lịch sử đặt xe</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            @include('layouts.notification')
                            <form action="{{ route('auth.update') }}" class="mb-3" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" disabled class="form-control" id="email"
                                        value="{{ $khachHang->email }}">
                                </div>
                                <div class="form-row my-3">
                                    <div class="col-md-6">
                                        <label for="hoTen">Họ tên</label>
                                        <input type="text"
                                            class="form-control{{ $errors->has('hoten') ? ' is-invalid' : '' }}"
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
                                        <input type="text" class="form-control" name="cccd" id="cccd"
                                            value="{{ $khachHang->cccd }}">
                                    </div>
                                </div>
                                <div class="form-row my-3">
                                    <div class="col-md-6">
                                        <label for="ngaySinh">Ngày sinh</label>
                                        <input type="date" class="form-control" id="ngaySinh" name="ngaysinh"
                                            placeholder="Chọn ngày sinh" required value="{{ $khachHang->ngaysinh }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="soDienThoai">Số điện thoại</label>
                                        <input type="text"
                                            class="form-control{{ $errors->has('sdt') ? ' is-invalid' : '' }}"
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
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cập
                                        nhật</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên xe</th>
                                        <th scope="col">Biển số</th>
                                        <th scope="col">Ngày nhận xe</th>
                                        <th scope="col">Ngày trả xe</th>
                                        <th scope="col">Thành tiền</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Tình trạng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $dem = 0;
                                    @endphp
                                    @forelse ($giaoDichs as $giaoDich)
                                        <tr>
                                            <th scope="row">{{ ++$dem }}</th>
                                            <td>{{ $giaoDich->xe->tenxe }}</td>
                                            <td>{{ $giaoDich->xe->bienso }}</td>
                                            <td>{{ date('d/m/Y', strtotime($giaoDich->ngaynhanxe)) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($giaoDich->ngaytraxe)) }}</td>
                                            <td>{{ number_format($giaoDich->tongtien) }} đồng</td>
                                            <td>{{ date('d/m/Y', strtotime($giaoDich->created_at)) }}</td>
                                            <td>
                                                @if ($giaoDich->tinhtranggiaodich == 0)
                                                    Chưa duyệt
                                                @elseif($giaoDich->tinhtranggiaodich == 1 and $giaoDich->hoadon->tinhtranghoadon == 0)
                                                    <a href="{{ route('pages.thanhtoan', ['id' => $giaoDich->idgiaodich]) }}"
                                                        style="color: #1b995e">Click để Thanh
                                                        toán</a>
                                                @elseif($giaoDich->hoadon->tinhtranghoadon == 1 and $giaoDich->tinhtranggiaodich == 1)
                                                    Đã thanh toán
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="6">Không có lịch sử</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
