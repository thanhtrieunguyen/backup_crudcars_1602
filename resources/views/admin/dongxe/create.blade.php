@extends('layouts.index')

@section('content')
    @include('admin.nav')
    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Thêm mới dòng xe</h5>
                        </div>
                        <div>
                            <a href="{{ route('dongxe.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i> Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('dongxe.store') }}" class="mb-3" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-row my-2">
                            <div class="col-md-12">
                                <label><strong style="font-weight: 600">Tên dòng xe</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>

                                <input type="text" class="form-control{{ $errors->has('tendongxe') ? ' is-invalid' : '' }}"
                                    id="tendongxe" name="tendongxe" placeholder="Nhập tên dòng xe" value="{{ old('tendongxe') }}"
                                    onchange="hideErrorAndClass()">

                                @if ($errors->any())
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tendongxe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        

                        
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            
                            <div>
                                <button type="reset" class="btn btn-secondary mr-3"><i class="fas fa-sync-alt"></i> Làm
                                    mới</button>
                                <button type="submit" class="btn btn-success btn-add"><i class="fas fa-plus"></i>
                                    Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- START SCRIPT PREVIEW IMAGE AND RESET IMAGE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        const resetFileInput = () => {
            $('#inputHinh').wrap('<form>').closest('form').get(0).reset();
            $('#inputHinh').unwrap();
            $('#preview').empty();
        }

        const preview = (file) => {
            const fr = new FileReader();
            fr.onload = () => {
                const img = document.createElement("img");
                img.src = fr.result; // String Base64 
                img.alt = file.name;
                document.querySelector('#preview').append(img);
            };
            fr.readAsDataURL(file);
        };

        document.querySelector("#inputHinh").addEventListener("change", (ev) => {
            if (!ev.target.files) return; // Do nothing.
            $('#preview').empty(); // Xoá phần hiển thị preview trước khi hiển thị hình mới
            [...ev.target.files].forEach(preview);
        });
    </script>
    {{-- END SCRIPT PREVIEW IMAGE AND RESET IMAGE --}}

    <script>
        function formatCurrency(input) {
            // Xóa tất cả ký tự không phải số và ký tự dấu phẩy khỏi giá trị của input
            var value = input.value.replace(/[^0-9]/g, '');

            // Định dạng lại giá trị thành chuỗi số có dấu phẩy ngăn cách hàng nghìn
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

            // Gán giá trị đã định dạng lại vào input
            input.value = value;
        }
    </script>
@endsection
