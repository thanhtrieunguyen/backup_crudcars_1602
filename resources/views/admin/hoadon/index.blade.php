@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-12">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    @include('layouts.notification')
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Danh sách hoá đơn <span class="text-muted">({{ $hoaDons->count() }}
                                    hoá đơn)</span></h5>
                        </div>
                    </div>
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Xe</th>
                                <th scope="col">Biển số</th>
                                <th scope="col">Người thuê</th>
                                <th scope="col">CCCD</th>
                                <th scope="col">Ngày nhận xe</th>
                                <th scope="col">Ngày trả xe</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col">Ngày thanh toán</th>
                                <th scope="col">Tình trạng thanh toán</th>
                                <th scope="col">Duyệt</th>
                                <th scope="col" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $dem = 0;
                            @endphp
                            @forelse ($hoaDons as $hoaDon)
                                <tr>
                                    <th scope="row">{{ ++$dem }}</th>
                                    <td>{{ $hoaDon->xe->tenxe }}</td>
                                    <td>{{ $hoaDon->xe->bienso }}</td>
                                    <td>{{ $hoaDon->user->hoten }}</td>
                                    <td>{{ $hoaDon->user->cccd }}</td>
                                    <td>{{ date('d/m/Y', strtotime($hoaDon->ngaynhanxe)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($hoaDon->ngaytraxe)) }}</td>
                                    <td>{{ number_format($hoaDon->tongtien) }} đồng</td>
                                    <td>{{ date('d/m/Y', strtotime($hoaDon->ngaythanhtoan)) }} </td>
                                    <td>{{ $hoaDon->tinhtranghoadon == 0 ? 'Chưa thanh toán' : 'Đã thanh toán' }}</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" {{ $hoaDon->tinhtranghoadon == 0 ? '' : 'checked' }}
                                                hoadon-id="{{ $hoaDon->idhoadon }}"
                                                class="custom-control-input js_checkbox_tinhtrang"
                                                id="checkBox_{{ $hoaDon->idhoadon }}">
                                            <label class="custom-control-label"
                                                for="checkBox_{{ $hoaDon->idhoadon }}"></label>
                                        </div>
                                    </td>
                                    <td class="text-center" style="display: flex; justify-content: center">
                                        <a href="#" class="text-danger js_btn_xoa_hoa_don"
                                            hoadon-id="{{ $hoaDon->idhoadon }}"><i class="fa fa-trash"></i>Xóa</a>
                                        <form id="js_form_xoa_hoa_don_{{ $hoaDon->idhoadon }}"
                                            action="{{ route('hoadon.destroy', $hoaDon->idhoadon) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="9">Không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.js_checkbox_tinhtrang', function(e) {
                e.preventDefault();
                let checked = $(this).prop('checked');
                let hoaDonId = $(this).attr('hoadon-id')
                let tinhTrang;
                (checked) ? tinhTrang = 1: tinhTrang = 0;

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    url: "admin/update-tinh-trang-hoa-don",
                    data: {
                        idhoadon: hoaDonId,
                        tinhtranghoadon: tinhTrang
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });

            $('body').on('click', '.js_btn_xoa_hoa_don', function(e) {
                e.preventDefault();
                let id = $(this).attr('hoadon-id');
                if (confirm('Bạn có chắc chắn?')) {
                    $(`#js_form_xoa_hoa_don_${id}`).submit();
                }
            });
        });
    </script>
@endsection
