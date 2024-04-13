@extends('layouts.index')

<head>
    <link rel="stylesheet" href="{{ asset('css/thanhtoan.css') }}">
    <link rel="stylesheet" href="{{ asset('static/icon/themify-icons/themify-icons.css') }}">
    <script src="https://kit.fontawesome.com/1a9d4a043e.js" crossorigin="anonymous"></script>
</head>

@section('content')
    <!-- khung thanh toan -->
    <div class="payment-container mt-4">
        <!-- tieu de -->
        <div class="section-heading">
            <h3>Chọn Phương Thức Thanh Toán</h3>
        </div>
        <div class="payment-mobile">
            <div class="m-container">

                <!-- begin thong tin chon thanh toan -->
                <div class="payment-module">
                    <div class="payment-method">

                        <!-- Click 1 -->
                        <div class="payment-method__item" id="payment-method">
                            <div class="title-payment">
                                <h6>Ví điện tử</h6>
                            </div>
                            <div class="line-payment"></div>
                            <div class="content-payment">
                                <p class="text">1. Lựa chọn ví điện tử</p>
                                <div class="radio-payment">
                                    <div class="custom-radio"><input type="radio" id="r_e_0"
                                            name="Ví điện tử_vnpay_radio" checked><label for="r_e_0"><img loading="lazy"
                                                class="e-wallet" src="./static/img/logo-vnpay.png" alt="VNPay"
                                                width="100px"></label></div>

                                </div>
                                <p class="text">2. Bấm <strong>“THANH TOÁN” </strong>để chuyển hướng về ví điện tử
                                    và tiến
                                    hành đặt cọc.</p>
                                <p class="text">3. Nhập thông tin tài khoản hoặc quét mã thanh toán.</p>
                                <p class="text">4. Sau khi thanh toán, bạn sẽ nhận được thông báo đặt xe thành công
                                    và thông
                                    tin chủ xe qua tin
                                    nhắn và qua ứng dụng/ website VIETCAR.</p>
                            </div>

                            <div class="mt-4">
                                <p style="font-size: 12px" class="payment-method__note">*Gọi <a href="tel:#">19000000 (7AM
                                        - 10PM) </a>hoặc
                                    Chat với
                                    VietCar tại <a target="_blank" href="#">VietCar Fanpage
                                    </a>nếu bạn
                                    gặp khó khăn trong quá trinh thanh toán.</p>
                            </div>
                        </div>




                    </div>

                </div>

                <!-- end thong tin chon thanh toan -->



                <!-- begin khung tong tien -->
                <div class="payment-total"
                    style="float: right;height: unset; padding: 0px; background: unset; border-radius: 0px;">
                    <div>
                        <div
                            style="background: #f3fbf5; border-radius: 12px; padding: 24px 16px; transform: translateZ(0px); width: 400px;">
                            <div class="gotit-container">
                                <p class="title">Mã thanh toán </p>
                            </div>
                            <div class="total-price">
                                <p>Tổng giá trị</p>
                                <p class="total" style="display: block">
                                    <strong>{{ number_format($hoaDon->tongtien) }}K</strong>
                                </p>
                            </div>

                            <form action="{{ route('vnpay') }}" method="POST">
                                @csrf
                                <input type="hidden" name="idhoadon" value="{{ $hoaDon->idhoadon }}">
                                <input type="hidden" name="tongtien" value="{{ $hoaDon->tongtien }}">
                                <button type="submit" id="paymentBtn" class="btn btn--m btn-primary">Thanh toán với
                                    VNPAY</button>
                            </form>

                            <p class="note fontWeight-7">(*Trường hợp nhiều khách đặt xe cùng một thời điểm, hệ
                                thống sẽ ưu
                                tiên khách hàng thanh toán sớm nhất)</p>
                            <p class="note fontWeight-7">(*Để bảo vệ khoản thanh toán của bạn, tuyệt đối không
                                chuyển tiền
                                hoặc liên lạc bên ngoài trang web hoặc ứng dụng Vietcar)</p>
                        </div>
                    </div>
                </div>


                <!-- end khung tong tien -->

                <div class="clear" style="clear: both;"></div>
            </div>
        </div>
    </div>


    </body>

    </html>
@endsection
