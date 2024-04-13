@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Cập nhật giao dịch khách hàng <small
                                    class="text-muted">{{ $giaoDich->user->hoten }}</small>
                            </h5>
                        </div>
                        <div>
                            <a href="{{ route('giaodich.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('giaodich.update', $giaoDich->idgiaodich) }}" class="mb-3" method="POST"
                        enctype="multipart/form-data" onsubmit="return checkImageLimit()">
                        @csrf
                        @method('PATCH')
                        <div class="form-row my-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tenxe">Tên xe</label>
                                    <select class="form-control" id="tenxe" name="tenxe">
                                        @foreach ($xes as $xe)
                                            <option value="{{ $xe->tenxe }}"
                                                {{ $giaoDich->xe->tenxe == $xe->tenxe ? 'selected' : '' }}>
                                                {{ $xe->tenxe }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bienso">Biển số xe</label>
                                    <select class="form-control" id="bienso" name="bienso" disabled>
                                        @foreach ($xes as $xe)
                                            <option value="{{ $xe->bienso }}"
                                                {{ $giaoDich->xe->bienso == $xe->bienso ? 'selected' : '' }}>
                                                {{ $xe->bienso }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="bienso" value="{{ $xe->bienso }}">
                                </div>
                                <div class="form-group">
                                    <label for="cmnd">CCCD người thuê</label>
                                    <input type="text" class="form-control typeahead" id="searchcccd" name="cccd"
                                        placeholder="Tìm CMND người thuê" required value="{{ $giaoDich->user->cccd }}">

                                </div>
                                <div class="form-row my-3">
                                    <div class="col-md-6">
                                        <label for="ngayNhanXe">Ngày nhận xe</label>
                                        <input type="date" class="form-control" id="ngayNhanXe" name="ngaynhanxe"
                                            placeholder="Chọn ngày nhận xe" required
                                            value="{{ date('Y-m-d', strtotime($giaoDich->ngaynhanxe)) }}">


                                    </div>
                                    <div class="col-md-6">
                                        <label for="ngayTraXe">Ngày trả xe</label>
                                        <input type="date" class="form-control" id="ngayTraXe" name="ngaytraxe"
                                            placeholder="Chọn ngày trả" required
                                            value="{{ date('Y-m-d', strtotime($giaoDich->ngaytraxe)) }}">

                                    </div>
                                </div>
                                <div class="form-row my-3">
                                    <div class="col-md-6">
                                        <label for="soNgayThue">Số ngày thuê</label>
                                        <span class="form-control js_so_ngay_thue">{{ $songaythue }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="donGia">Giá thuê/ngày</label>
                                        <span class="form-control js_don_gia">{{ number_format($giaoDich->xe->gia) }}
                                            vnđ</span>

                                    </div>
                                    <input type="hidden" name="phidv" value="20000">
                                </div>
                                <div class="form-group">
                                    <label for="thanhTien">Thành tiền</label>
                                    <span class="form-control js_thanh_tien">{{ number_format($giaoDich->tongtien) }} vnđ
                                    </span>
                                    <input type="hidden" name="tongtien" id="tongtien">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse">
                            <div>
                                <button type="reset" class="btn btn-secondary mr-3" id="refreshButton"><i
                                        class="fas fa-sync-alt"></i> Làm
                                    mới</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cập
                                    nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var pathCCCD = "{{ route('getcccd') }}";

        $(document).ready(function() {


            // Xử lý sự kiện khi thay đổi tên xe
            $('#tenxe').on('change', function() {
                var tenXe = $(this).val();
                $('#bienso').html('<option value="" selected disabled>Chọn biển số xe</option>');

                clearData();

                $.ajax({
                    url: '{{ route('getbien-so-xe') }}',
                    type: 'GET',
                    data: {
                        tenxe: tenXe
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.length > 0) {
                            $.each(data, function(key, value) {
                                $('#bienso').append('<option value="' + value + '">' +
                                    value + '</option>');
                            });
                        } else {
                            $('#bienso').append(
                                '<option value="">Không có biển số xe</option>');
                        }
                    },
                    error: function() {
                        alert('Lỗi khi tải dữ liệu biển số xe');
                    }
                });
            });


        });

        $('#searchcccd').typeahead({
            source: function(query, process) {
                $.get(pathCCCD, {
                    query: query
                }, function(data) {
                    process(data.map(function(item) {
                        return item.cccd;
                    }));
                });
            }
        });

        $('#tenxe').on('change', function() {
            $('#bienso').prop('disabled', false); // Mở khóa input biển số

        });

        function clearData() {
            donGiaElement.textContent = '';
            thanhTienElement.textContent = '';
            document.getElementById('tongtien').value = '';
        }
    </script>

    <script>
        // Lấy các phần tử cần thiết
        var ngayNhanXeInput = document.getElementById('ngayNhanXe');
        var ngayTraXeInput = document.getElementById('ngayTraXe');
        var soNgayThueElement = document.querySelector('.js_so_ngay_thue');
        var donGiaElement = document.querySelector('.js_don_gia');
        var thanhTienElement = document.querySelector('.js_thanh_tien');

        // Sự kiện thay đổi biển số
        $('#bienso').on('change', function() {
            var bienSo = $(this).val();
            // $('<input>').attr({
            //     type: 'hidden',
            //     name: 'bienso',
            //     value: bienSo
            // }).appendTo('form');

            $.ajax({
                url: '{{ route('get-don-gia') }}',
                type: 'GET',
                data: {
                    bienso: bienSo
                },
                dataType: 'json',
                success: function(data) {
                    var formattedPrice = new Intl.NumberFormat('vi-VN').format(data);
                    formattedPrice = formattedPrice.replace(/\./g, ',');
                    donGiaElement.textContent = formattedPrice.toLocaleString() + ' đồng';
                    updateThanhTien();
                },
                error: function() {
                    alert('Lỗi khi lấy đơn giá');
                }
            });
        });

        ngayNhanXeInput.addEventListener('change', function() {
            updateSoNgayThueAndThanhTien();
        });

        ngayTraXeInput.addEventListener('change', function() {
            updateSoNgayThueAndThanhTien();
        });

        // Hàm cập nhật số ngày thuê và tổng tiền
        function updateSoNgayThueAndThanhTien() {
            var ngayNhanXe = new Date(ngayNhanXeInput.value);
            var ngayTraXe = new Date(ngayTraXeInput.value);

            // Kiểm tra xem cả hai ngày nhận xe và ngày trả xe đã được chọn
            if (ngayNhanXeInput.value && ngayTraXeInput.value) {
                // Kiểm tra nếu ngày trả xe trước ngày nhận xe
                if (ngayTraXe < ngayNhanXe) {
                    alert('Ngày trả xe không thể trước ngày nhận xe. Vui lòng chọn lại.');
                    ngayTraXeInput.value = ''; // Xoá giá trị ngày trả xe
                    soNgayThueElement.textContent = 'Không hợp lệ';
                    thanhTienElement.textContent = 'Không hợp lệ';
                    return; // Thoát khỏi hàm để không tiếp tục tính toán
                } else {
                    var soNgayThue = Math.ceil((ngayTraXe - ngayNhanXe) / (1000 * 3600 * 24)); // Tính số ngày thuê
                    soNgayThueElement.textContent = soNgayThue; // Hiển thị số ngày thuê
                    updateThanhTien(); // Cập nhật tổng tiền
                }
            }
        }

        // Hàm kiểm tra ngày trả xe
        function validateNgayTraXe() {
            var ngayNhanXe = new Date(ngayNhanXeInput.value);
            var ngayTraXe = new Date(ngayTraXeInput.value);

            if (ngayTraXe < ngayNhanXe) {
                alert('Ngày trả xe không thể trước ngày nhận xe. Vui lòng chọn lại.');
                ngayTraXeInput.value = ''; // Xóa giá trị ngày trả xe
                soNgayThueElement.textContent = ''; // Xóa số ngày thuê
                updateThanhTien(); // Cập nhật tổng tiền
            } else {
                updateSoNgayThue();
            }
        }

        // Hàm cập nhật tổng tiền
        function updateThanhTien() {
            var soNgayThue = parseInt(soNgayThueElement.textContent); // Lấy số ngày thuê
            var donGia = parseInt(donGiaElement.textContent.replace(/\D/g, '')); // Lấy đơn giá/ngày

            // Kiểm tra nếu số ngày thuê không phải là một số hợp lệ (NaN), thì không cập nhật tổng tiền
            if (!isNaN(soNgayThue)) {
                var thanhTien = soNgayThue * donGia; // Tính tổng tiền
                thanhTienElement.textContent = thanhTien.toLocaleString() + ' đồng'; // Hiển thị tổng tiền
                document.getElementById('tongtien').value = thanhTien;
            }
        }
    </script>
@endsection
