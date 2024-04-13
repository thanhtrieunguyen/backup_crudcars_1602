@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Cập nhật xe <small class="text-muted">{{ $xe->tenxe }}</small></h5>
                        </div>
                        <div>
                            <a href="{{ route('xe.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i> Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('xe.update', $xe->idxe) }}" class="mb-3" method="POST"
                        enctype="multipart/form-data" onsubmit="return checkImageLimit()">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="loaiXe">Dòng xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <select class="form-control{{ $errors->has('iddongxe') ? ' is-invalid' : '' }}"
                                    name="iddongxe" id="dongXe">
                                    <option selected disabled>Chọn dòng xe</option>
                                    @foreach ($dongXe as $dongXe)
                                        <option value="{{ $dongXe->iddongxe }}"
                                            {{ $xe->iddongxe == $dongXe->iddongxe ? 'selected' : '' }}>
                                            {{ $dongXe->tendongxe }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('iddongxe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('iddongxe') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label>Hãng xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <select class="form-control{{ $errors->has('idhangxe') ? ' is-invalid' : '' }}"
                                    name="idhangxe" id="hangXe" onchange="hideErrorAndClass()">
                                    <option selected disabled>Chọn hãng xe</option>
                                    @foreach ($hangXe as $hangXe)
                                        <option value="{{ $hangXe->idhangxe }}"
                                            {{ $xe->idhangxe == $hangXe->idhangxe ? 'selected' : '' }}>
                                            {{ $hangXe->tenhangxe }}</option>
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
                                <label for="tenXe">Tên xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <input type="text" class="form-control{{ $errors->has('tenxe') ? ' is-invalid' : '' }}"
                                    id="tenXe" name="tenxe" placeholder="Nhập tên xe" value="{{ $xe->tenxe }}">

                                @if ($errors->has('tenxe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tenxe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row my-2">

                            <div class="col-md-6">
                                <label for="bienSo">Biển số xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <input type="text" class="form-control{{ $errors->has('bienso') ? ' is-invalid' : '' }}"
                                    id="bienSo" name="bienso" placeholder="Nhập biển số xe"
                                    value="{{ $xe->bienso }}">

                                @if ($errors->any())
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bienso') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="gia">Giá thuê<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <input type="text" class="form-control{{ $errors->has('gia') ? ' is-invalid' : '' }}"
                                    id="gia" name="gia" placeholder="Nhập giá thuê" value="{{ $xe->gia }}"
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
                                <label for="truyenDong">Truyền động</label>
                                <select class="form-control" name="truyendong" id="truyenDong">
                                    <option selected disabled>Chọn truyền động xe</option>
                                    <option value="Số tự động" {{ $xe->truyendong == 'Số tự động' ? 'selected' : '' }}>Số
                                        tự động</option>
                                    <option value="Số sàn" {{ $xe->truyendong == 'Số sàn' ? 'selected' : '' }}>Số sàn
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nhienLieu">Nhiên liệu</label>
                                <select class="form-control" name="nhienlieu" id="nhienLieu">
                                    <option selected disabled>Chọn nhiên liệu xe</option>
                                    <option value="Xăng" {{ $xe->nhienlieu == 'Xăng' ? 'selected' : '' }}>Xăng</option>
                                    <option value="Điện" {{ $xe->nhienlieu == 'Điện' ? 'selected' : '' }}>Điện</option>
                                    <option value="Dầu" {{ $xe->nhienlieu == 'Dầu' ? 'selected' : '' }}>Dầu</option>

                                </select>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="nhienlieutieuhao_km">Nhiên liệu tiêu hao lít/Km</label>
                                <input type="text"
                                    class="form-control{{ $errors->has('nhienlieutieuhao_km') ? ' is-invalid' : '' }}"
                                    id="nhienlieutieuhao_km" name="nhienlieutieuhao_km"
                                    placeholder="Nhập nhiên liệu tiêu hao" value="{{ $xe->nhienlieutieuhao_km }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mieuTa">Miêu tả</label>
                            @php
                                function convertNewlines($text)
                                {
                                    return str_replace('\n', "\n", $text);
                                }

                                // Sử dụng hàm
                                $des = convertNewlines($xe->mieuta);
                                // dd($description_with_br);
                            @endphp
                            <textarea class="form-control{{ $errors->has('mieuta') ? ' is-invalid' : '' }}" name="mieuta" id="mieuTa"
                                rows="3" placeholder="Nhập miêu tả">{{ $des }}</textarea>

                            @if ($errors->has('mieuta'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mieuta') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div class="form-group">
                                <label for="inputHinh">Chọn hình<em style="font-weight: 200" class=""
                                        aria-label="Required">(optional)</em>
                                </label>
                                <input type="file" class="form-control-file" id="inputHinh" name="hinhxe[]" multiple>
                                <div class="btn-reset">
                                    <button type="button" onclick="resetFileInput()">Xoá hình</button>
                                </div>
                                <div class="preview" style="margin-top: 10px; display: flex; flex-wrap: wrap;">
                                    @if ($hinhXeArr)
                                        @foreach ($hinhXeArr as $url)
                                            <div style="padding: 5px; flex: 0 0 50%; ">
                                                <img src="{{ $url }}" style="width: 100%;">
                                                <label style="display: block; margin-top: 5px;">
                                                    <input type="checkbox" name="xoa_hinh[]"
                                                        value="{{ $url }}">
                                                    Xoá
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="" id="preview" style="padding: 5px"></div>
                                <strong class="text-danger">{{ $errors->first('hinhxe') }}</strong>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <div>
                                <button type="reset" class="btn btn-secondary mr-3"><i class="fas fa-sync-alt"></i> Làm
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

    <script>
        const checkImageLimit = () => {
            const selectedImagesCount = document.querySelectorAll('input[name="hinhxe[]"]:checked').length;
            if (selectedImagesCount > 4) {
                alert('Bạn chỉ có thể chọn tối đa 4 ảnh');
                return false; // Ngăn chặn form submit nếu vượt quá giới hạn
            }
            return true;
        };
    </script>


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

        document.addEventListener('DOMContentLoaded', function() {
            var giaInput = document.getElementById('gia');
            formatCurrency(giaInput);
        });
    </script>
@endsection
