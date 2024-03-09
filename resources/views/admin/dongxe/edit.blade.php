@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Cập nhật dòng xe <small class="text-muted">{{ $dongXe->tendongxe }}</small>
                            </h5>
                        </div>
                        <div>
                            <a href="{{ route('dongxe.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('dongxe.update', $dongXe->iddongxe) }}" class="mb-3" method="POST"
                        enctype="multipart/form-data" onsubmit="return checkImageLimit()">
                        @csrf
                        @method('PATCH')
                        <div class="form-row my-2">
                            <div class="col-md-12">
                                <label for="tenDongXe">Tên dòng xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <input type="text"
                                    class="form-control{{ $errors->has('tendongxe') ? ' is-invalid' : '' }}" id="tenDongXe"
                                    name="tendongxe" placeholder="Nhập tên dòng xe" value="{{ $dongXe->tendongxe }}">

                                @if ($errors->has('tendongxe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tendongxe') }}</strong>
                                    </span>
                                @endif
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
@endsection
