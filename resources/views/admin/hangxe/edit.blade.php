@extends('layouts.index')

@section('content')
    @include('admin.nav')

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card rounded-lg border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center py-3">
                        <div>
                            <h5 class="card-title">Cập nhật hãng xe <small class="text-muted">{{ $hangXe->tenhangxe }}</small>
                            </h5>
                        </div>
                        <div>
                            <a href="{{ route('hangxe.index') }}" class="btn btn-outline-info"><i class="fas fa-list-ul"></i>
                                Danh
                                sách</a>
                        </div>
                    </div>
                    @include('layouts.notification')
                    <form action="{{ route('hangxe.update', $hangXe->idhangxe) }}" class="mb-3" method="POST"
                        enctype="multipart/form-data" onsubmit="return checkImageLimit()">
                        @csrf
                        @method('PATCH')
                        <div class="form-row my-2">
                            <div class="col-md-12">
                                <label for="tenHangXe">Tên hãng xe<strong style="font-weight: 600" class="important"
                                        aria-label="Required">(*)</strong>
                                </label>
                                <input type="text"
                                    class="form-control{{ $errors->has('tenhangxe') ? ' is-invalid' : '' }}" id="tenHangXe"
                                    name="tenhangxe" placeholder="Nhập tên hãng xe" value="{{ $hangXe->tenhangxe }}">

                                @if ($errors->has('tenhangxe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tenhangxe') }}</strong>
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
