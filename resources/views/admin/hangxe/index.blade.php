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
                            <h5 class="card-title">Danh sách Hãng xe <span class="text-muted">({{ $hangXes->count() }}
                                    hãng xe)</span>
                            </h5>
                        </div>
                        <div>
                            <a href="{{ route('hangxe.create') }}" class="btn btn-success "><i class="fas fa-plus"></i>
                                Thêm</a>
                        </div>
                    </div>
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên Hãng xe</th>
                                <th scope="col" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hangXes as $index => $hangXe)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $hangXe->tenhangxe }}</td>

                                    <td class="text-center" style="display: flex; justify-content: center">
                                        <a href="{{ route('hangxe.edit', $hangXe->idhangxe) }}" class="text-primary mr-3"><i
                                                class="fa fa-edit"></i>Cập
                                            nhật</a>
                                        <a href="#" class="text-danger js_btn_xoa_xe"
                                            xe-id="{{ $hangXe->idhangxe }}"><i class="fa fa-trash"></i>Xóa</a>
                                        <form id="js_form_xoa_xe_{{ $hangXe->idhangxe }}"
                                            action="{{ route('hangxe.destroy', $hangXe->idhangxe) }}" method="POST">
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
