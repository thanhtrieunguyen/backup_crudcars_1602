@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thanh toán thất bại</div>

                    <div class="card-body">
                        {{ $message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
