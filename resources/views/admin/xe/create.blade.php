@extends('layouts.index')

@section('content')
    @include('admin.nav')
    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Thêm mới xe</h5>
                        </div>
                        <div>
                            <a href="{{ route('xe.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i> Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('xe.store') }}" class="mb-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label><strong style="font-weight: 600">Dòng xe</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>
                                <select class="form-control{{ $errors->has('iddongxe') ? ' is-invalid' : '' }}"
                                    name="iddongxe" id="dongXe" onchange="hideErrorAndClass()">
                                    <option selected disabled>Chọn dòng xe</option>
                                    @foreach ($dongXe as $dongXe)
                                        <option value="{{ $dongXe->iddongxe }}">{{ $dongXe->tendongxe }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('iddongxe'))
                                    <span class="invalid-feedback" role="alert" id="dongxe-error">
                                        <strong>{{ $errors->first('iddongxe') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label><strong style="font-weight: 600">Hãng xe</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>
                                <select class="form-control{{ $errors->has('idhangxe') ? ' is-invalid' : '' }}"
                                    name="idhangxe" id="hangXe" onchange="hideErrorAndClass()">
                                    <option selected disabled>Chọn hãng xe</option>
                                    @foreach ($hangXe as $hangXe)
                                        <option value="{{ $hangXe->idhangxe }}">{{ $hangXe->tenhangxe }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->any())
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idhangxe') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-row my-2">
                            <div class="col-md-12">
                                <label><strong style="font-weight: 600">Tên xe</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>

                                <input type="text" class="form-control{{ $errors->has('tenxe') ? ' is-invalid' : '' }}"
                                    id="tenXe" name="tenxe" placeholder="Nhập tên xe" value="{{ old('tenxe') }}"
                                    onchange="hideErrorAndClass()">

                                @if ($errors->any())
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tenxe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row my-2">
                            <div class="col-md-6">
                                <label><strong style="font-weight: 600">Biển số xe</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>
                                <input type="text" class="form-control{{ $errors->has('bienso') ? ' is-invalid' : '' }}"
                                    id="bienSo" name="bienso" placeholder="Nhập biển số xe"
                                    value="{{ old('bienso') }}">

                                @if ($errors->any())
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bienso') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label><strong style="font-weight: 600">Giá thuê</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>
                                <input type="text" class="form-control{{ $errors->has('gia') ? ' is-invalid' : '' }}"
                                    id="giaThue" name="gia" placeholder="Nhập giá thuê" value="{{ old('gia') }}"
                                    oninput="formatCurrency(this)">

                                @if ($errors->has('gia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row my-3">
                            <div class="form-group col-md-4">
                                <label for="truyenDong"><strong style="font-weight: 600">Truyền động</strong></label>
                                <select class="form-control" name="truyendong" id="truyenDong">
                                    <option selected disabled>Chọn truyền động xe</option>
                                    <option value="Số tự động">Số tự động</option>
                                    <option value="Số sàn">Số sàn</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nhienLieu"><strong style="font-weight: 600">Nhiên liệu</strong></label>
                                <select class="form-control" name="nhienlieu" id="nhienLieu">
                                    <option selected disabled>Chọn nhiên liệu xe</option>
                                    <option value="Xăng">Xăng</option>
                                    <option value="Điện">Điện</option>
                                    <option value="Dầu">Dầu</option>

                                </select>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="nhienlieutieuhao_km"><strong style="font-weight: 600">Nhiên liệu tiêu hao
                                        lít/Km</strong></label>
                                <input type="text"
                                    class="form-control{{ $errors->has('nhienlieutieuhao_km') ? ' is-invalid' : '' }}"
                                    id="nhienlieutieuhao_km" name="nhienlieutieuhao_km"
                                    placeholder="Nhập nhiên liệu tiêu hao" value="{{ old('nhienlieutieuhao_km') }}"
                                    oninput="formatNumber(this)">
                                @if ($errors->has('nhienlieutieuhao_km'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nhienlieutieuhao_km') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <span><strong style="font-weight: 600">Miêu tả</strong></span>
                            <textarea class="form-control{{ $errors->has('mieuta') ? ' is-invalid' : '' }}" name="mieuta" id="moTa"
                                rows="3" placeholder="Nhập miêu tả"></textarea>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div class="form-group">
                                <label><strong style="font-weight: 600">Chọn hình</strong><strong style="font-weight: 600"
                                        class="important" aria-label="Required">(*)</strong>
                                </label>
                                <input type="file" class="form-control-file imagefet" id="inputHinh" name="hinhxe[]"
                                    multiple>

                                <strong class="text-danger">{{ $errors->first('hinhxe') }}</strong>
                                <div class="btn-reset">
                                    <button type="button" onclick="resetFileInput()">Xoá hình</button>
                                </div>
                                <div id="preview"></div>
                            </div>
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
