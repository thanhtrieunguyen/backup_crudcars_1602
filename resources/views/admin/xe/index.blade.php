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
                            <h5 class="card-title">Danh sách xe <span class="text-muted">({{ $xes->total() }} xe)</span></h5>
                        </div>
                        <div>
                            <a href="{{ route('xe.create') }}" class="btn btn-success "><i class="fas fa-plus"></i>
                                Thêm</a>
                        </div>
                    </div>
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col" colspan="2">Hình</th>
                                <th scope="col">Tên xe</th>
                                <th scope="col">Biển số</th>
                                <th scope="col">Giá thuê</th>
                                <th scope="col">Truyền động</th>
                                <th scope="col">Nhiên liệu</th>
                                <th scope="col">Tiêu hao</th>
                                <th scope="col">Dòng xe</th>
                                <th scope="col">Hãng xe</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $startIndex = ($xes->currentPage() - 1) * $xes->perPage() + 1;
                            @endphp
                            @forelse ($xes as $index => $xe)
                                <tr>
                                    <th scope="row">{{ $startIndex + $index }}</th>
                                    <td class="justify-content-lg-center" style="height: 60px; width: 120px ">
                                        @php
                                            $array = json_decode($xe->hinhxe->hinhxe);
                                            $img1 = isset($array[0]) ? $array[0] : null;
                                        @endphp
                                        <div style="display: flex flex-row  ">
                                            <img src="{{ $img1 }}" class="img-fluid" alt="{{ $xe->tenxe }}">
                                        </div>
                                    </td>
                                    <td class="justify-content-lg-center" style="height: 60px; width: 120px">
                                        @php
                                            $img2 = isset($array[1]) ? $array[1] : null;
                                        @endphp
                                        <div style="display: flex flex-row  ">
                                            <img src="{{ $img2 }}" class="img-fluid" alt="{{ $xe->tenxe }}">
                                        </div>
                                    </td>

                                    <td>
                                        <a href="{{ route('xe.show', $xe->idxe) }}">
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
                                    <td>{{ $xe->tinhtrang == 0 ? 'Chưa đặt' : 'Đã đặt' }}</td>
                                    <td class="text-center" style="display: flex">
                                        <a href="{{ route('xe.edit', $xe->idxe) }}" class="text-primary mr-3"><i
                                                class="fa fa-edit"></i>Cập
                                            nhật</a>
                                        <a href="#" class="text-danger js_btn_xoa_xe" xe-id="{{ $xe->idxe }}"><i
                                                class="fa fa-trash"></i>Xóa</a>
                                        <form id="js_form_xoa_xe_{{ $xe->idxe }}"
                                            action="{{ route('xe.destroy', $xe->idxe) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="7">Không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {!! $xes->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('body').on('click', '.js_btn_xoa_xe', function(e) {
                e.preventDefault();
                let id = $(this).attr('xe-id');
                if (confirm('Bạn có chắc chắn?')) {
                    $(`#js_form_xoa_xe_${id}`).submit();
                }
            });
        });
    </script>
@endsection
