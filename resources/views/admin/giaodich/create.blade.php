@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-6 offset-3">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Thêm giao dịch</h5>
                        </div>
                        <div>
                            <a href="{{ route('giaodich.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('giaodich.store') }}" class="mb-3" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tenxe">Tên xe</label>
                            <select class="form-control" id="tenxe" name="tenxe" required></select>
                        </div>
                        <div class="form-group">
                            <label for="bienso">Biển số xe</label>
                            <select class="form-control" id="bienso" name="bienso" required></select>
                        </div>
                        <div class="form-group">
                            <label for="cccd">CCCD người thuê</label>
                            <input type="text" class="form-control typeahead" id="searchcccd" name="cccd"
                                placeholder="Tìm CCCD người thuê" required>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="ngayNhanXe">Ngày nhận xe</label>
                                <input type="date" class="form-control" id="ngayNhanXe" name="ngaynhanxe"
                                    placeholder="Chọn ngày nhận xe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ngayTraXe">Ngày trả xe</label>
                                <input type="date" class="form-control" id="ngayTraXe" name="ngaytraxe"
                                    placeholder="Chọn ngày trả" required>
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <label for="soNgayThue">Số ngày thuê</label>
                                <span class="form-control js_so_ngay_thue"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="donGia">Giá thuê/ngày</label>
                                <span class="form-control js_don_gia"></span>
                            </div>
                            <input type="hidden" name="phidv" value="20000">
                        </div>
                        <div class="form-group">
                            <label for="thanhTien">Thành tiền</label>
                            <span class="form-control js_thanh_tien">
                            </span>
                            <input type="hidden" name="tongtien" id="tongtien">
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

@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var pathCCCD = "{{ route('getcccd') }}";

        $(document).ready(function() {
            // Lấy danh sách tất cả xe
            $.ajax({
                url: '{{ route('getall-xe') }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#tenxe').append('<option value="" selected disabled>Chọn tên xe</option>');
                    $('#bienso').append('<option value="" selected disabled>Chọn biển số xe</option>');

                    $.each(data, function(key, value) {
                        $('#tenxe').append('<option value="' + value.tenxe + '">' + value
                            .tenxe + '</option>');
                        $('#bienso').append('<option value="' + value.bienso + '">' + value
                            .bienso + '</option>');
                    });
                },
                error: function() {
                    alert('Lỗi khi tải dữ liệu xe');
                }
            });

            // Xử lý sự kiện khi thay đổi tên xe
            $('#tenxe').on('change', function() {
                var tenXe = $(this).val();
                $('#bienso').html('<option value="" selected disabled>Chọn biển số xe</option>');

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

            $.ajax({
                url: '{{ route('get-don-gia') }}',
                type: 'GET',
                data: {
                    bienso: bienSo
                },
                dataType: 'json',
                success: function(data) {
                    donGiaElement.textContent = data.toLocaleString() + ' đồng';
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
