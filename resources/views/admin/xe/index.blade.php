@extends('layouts.index')

@section('content')
<div class="vehicle-management-container">
    @include('admin.nav')
    <div class="vehicle-content">
        <div class="vehicle-header">
            <div class="header-info">
                <h2>Quản Lý Xe</h2>
            </div>
            <div class="header-actions">
                <a href="{{ route('xe.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Thêm Xe
                </a>
            </div>
        </div>

        @include('layouts.notification')

        <div class="vehicle-stats">
            <div class="stat-card">
                <div class="stat-icon text-primary">
                    <i class="fas fa-car"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $xes->total() }}</h3>
                    <p>Tổng Số Xe</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon text-success">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $xes->where('tinhtrang', 0)->count() }}</h3>
                    <p>Xe Chưa Đặt</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon text-warning">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $xes->where('tinhtrang', 1)->count() }}</h3>
                    <p>Xe Đã Đặt</p>
                </div>
            </div>
        </div>

        <div class="vehicle-table-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Hình Ảnh</th>
                            <th>Tên Xe</th>
                            <th>Biển Số</th>
                            <th>Giá Thuê</th>
                            <th>Truyền Động</th>
                            <th>Nhiên Liệu</th>
                            <th>Tiêu Hao</th>
                            <th>Dòng Xe</th>
                            <th>Hãng Xe</th>
                            <th>Tình Trạng</th>
                            <th class="text-center">Tùy Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $startIndex = ($xes->currentPage() - 1) * $xes->perPage() + 1;
                        @endphp
                        @forelse ($xes as $index => $xe)
                            <tr>
                                <td>{{ $startIndex + $index }}</td>
                                <td class="vehicle-thumbnail">
                                    @php
                                        $images = json_decode($xe->hinhxe->hinhxe);
                                        $img1 = $images[0] ?? null;
                                        $img2 = $images[1] ?? null;
                                    @endphp
                                    <div class="thumbnail-container">
                                        @if($img1)
                                            <img src="{{ $img1 }}" alt="{{ $xe->tenxe }}" class="img-fluid">
                                        @endif
                                        @if($img2)
                                            <img src="{{ $img2 }}" alt="{{ $xe->tenxe }}" class="img-fluid">
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('xe.show', $xe->idxe) }}" class="vehicle-name">
                                        {{ $xe->tenxe }}
                                    </a>
                                </td>
                                <td>{{ $xe->bienso }}</td>
                                <td>{{ number_format($xe->gia) }} đồng</td>
                                <td>{{ $xe->truyendong }}</td>
                                <td>{{ $xe->nhienlieu }}</td>
                                <td>{{ $xe->nhienlieutieuhao_km }} Km/Lít</td>
                                <td>{{ $xe->dongXe->tendongxe }}</td>
                                <td>{{ $xe->hangXe->tenhangxe }}</td>
                                <td>
                                    <span class="badge {{ $xe->tinhtrang == 0 ? 'badge-success' : 'badge-warning' }}">
                                        {{ $xe->tinhtrang == 0 ? 'Chưa đặt' : 'Đã đặt' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="action-buttons">
                                        <a href="{{ route('xe.edit', $xe->idxe) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger js_btn_xoa_xe" xe-id="{{ $xe->idxe }}">
                                            <i class="fas fa-trash"></i> Xóa
                                        </button>
                                        <form id="js_form_xoa_xe_{{ $xe->idxe }}"
                                            action="{{ route('xe.destroy', $xe->idxe) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="12">Không có dữ liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagination-container">
            {!! $xes->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection

@push('script')
<script>
$(document).ready(function() {
    $('body').on('click', '.js_btn_xoa_xe', function(e) {
        e.preventDefault();
        let id = $(this).attr('xe-id');

        Swal.fire({
            title: 'Xác nhận xóa',
            text: 'Bạn có chắc chắn muốn xóa xe này?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#js_form_xoa_xe_${id}`).submit();
            }
        });
    });
});
</script>
<style>
.vehicle-management-container {
    display: flex;
}

.vehicle-content {
    flex-grow: 1;
    padding: 20px;
    margin: auto
}

.vehicle-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.vehicle-count {
    color: #6c757d;
    margin-left: 10px;
}

.vehicle-stats {
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

.vehicle-table-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    padding: 20px;
}

.vehicle-thumbnail {
    width: 150px;
}

.thumbnail-container {
    display: flex;
    gap: 10px;
}

.thumbnail-container img {
    max-width: 70px;
    max-height: 70px;
    object-fit: cover;
    border-radius: 8px;
}

.vehicle-name {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.vehicle-name:hover {
    color: #0056b3;
    text-decoration: underline;
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

.badge-success {
    background-color: #28a745;
    color: white;
}

.badge-warning {
    background-color: #ffc107;
    color: #212529;
}

.pagination-container {
    display: flex;
    justify-content: center;
}

@media (max-width: 992px) {
    .vehicle-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .vehicle-stats {
        flex-direction: column;
    }

    .stat-card {
        width: 100%;
    }

    .table-responsive {
        overflow-x: auto;
    }
}
</style>
@endpush
