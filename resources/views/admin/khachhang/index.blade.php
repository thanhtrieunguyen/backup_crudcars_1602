@extends('layouts.index')
@section('content')
    <div class="customer-management-container">
        @include('admin.nav')

        <div class="customer-content">
            <div class="customer-header">
                <div class="header-info">
                    <h2>Quản Lý Khách Hàng</h2>
                </div>
                <div class="header-actions">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Thêm Khách Hàng
                    </a>
                </div>
            </div>

            @include('layouts.notification')

            <div class="customer-stats">
                <div class="stat-card">
                    <div class="stat-icon text-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $khachHangs->count() }}</h3>
                        <p>Tổng Khách Hàng</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon text-success">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $khachHangs->sum('giaodich_count') }}</h3>
                        <p>Tổng Giao Dịch</p>
                    </div>
                </div>
            </div>

            <div class="customer-table-container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Họ Tên</th>
                                <th>CCCD</th>
                                <th>Ngày Sinh</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Số Giao Dịch</th>
                                <th class="text-center">Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $dem = 0; @endphp
                            @forelse ($khachHangs as $khachHang)
                                <tr>
                                    <td>{{ ++$dem }}</td>
                                    <td>{{ $khachHang->email }}</td>
                                    <td>{{ $khachHang->hoten }}</td>
                                    <td>{{ $khachHang->cccd }}</td>
                                    <td>{{ date('d/m/Y', strtotime($khachHang->ngaysinh)) }}</td>
                                    <td>{{ $khachHang->sdt }}</td>
                                    <td>{{ $khachHang->diachi }}</td>
                                    <td>{{ $khachHang->giaodich_count }}</td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <a href="{{ route('user.edit', $khachHang->iduser) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i> Sửa
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger js_btn_xoa_khach_hang"
                                                    khachhang-id="{{ $khachHang->iduser }}">
                                                <i class="fas fa-trash"></i> Xóa
                                            </button>
                                            <form id="js_form_xoa_khach_hang_{{ $khachHang->iduser }}"
                                                action="{{ route('user.destroy', $khachHang->iduser) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
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

@push('script')
<script>
$(document).ready(function() {
    $('body').on('click', '.js_btn_xoa_khach_hang', function(e) {
        e.preventDefault();
        let id = $(this).attr('khachhang-id');

        // Modern confirmation dialog
        Swal.fire({
            title: 'Xác nhận xóa',
            text: 'Bạn có chắc chắn muốn xóa khách hàng này?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#js_form_xoa_khach_hang_${id}`).submit();
            }
        });
    });
});
</script>
<style>
.customer-management-container {
    display: flex;
}

.customer-content {
    flex-grow: 1;
    padding: 20px;
}

.customer-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.customer-count {
    color: #6c757d;
    margin-left: 10px;
}

.customer-stats {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.stat-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    padding: 20px;
    width: 250px;
}

.stat-icon {
    font-size: 3rem;
    margin-right: 20px;
}

.stat-content h3 {
    margin: 0;
    font-size: 1.5rem;
}

.customer-table-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    padding: 20px;
}

.action-buttons {
    display: flex;
    gap: 10px;
    justify-content: center;
}

.action-buttons .btn {
    display: flex;
    align-items: center;
    gap: 5px;
}

.text-primary { color: #007bff; }
.text-success { color: #28a745; }

@media (max-width: 992px) {
    .customer-management-container {
        flex-direction: column;
    }

    .customer-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .customer-stats {
        flex-direction: column;
    }

    .stat-card {
        width: 100%;
    }
}
</style>
@endpush


