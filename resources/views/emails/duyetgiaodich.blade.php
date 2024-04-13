<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">

    <title></title>
</head>

<body>

    <section id="contact" style="width: 100%;">
        <div class="hihi" style=" text-align: center;
        color: #002B3D;">
            <h1 style="text-align: center;
        font-size: 30px;
        color: #002B3D;">Dịch vụ thuê xe VietCar
            </h1>
            <p style="font-weight: bold; font-size: 14px; color: white">Đây là Email tự động, Quý khách vui lòng không
                trả lời Email này! </p>
        </div>

        <div class="contact-box-right"
            style="width: 50%;
        padding: 0px 10px;
        margin-left: 25%;
        background-color: #5fcf86;
        border-radius: 15px;
        color: #fff;
        float: left;
        font-size: 12px;">
            <div class="haha" style="text-align: center;
        color: #fff;">
                <h3 style="font-size: 36px;"> <i class="ri-store-2-line"></i> VIETCAR</h3>
            </div>
            <p style="font-weight: bold; font-size: 14px; color: white">
                <span><i class="ri-store-2-line"></i> Xin chào: <strong
                        style="color: #f6e58d;">{{ $giaoDich->user->hoten }}</strong> </span><br>
            <p style="font-size: 14px; color: white">Giao dịch của bạn đã được duyệt. <br>Vui lòng truy cập trang cá
                nhân mục <a href="{{ route('pages.trangcanhan') }}"> lịch sử đặt xe</a> </p>
            </p>
            <b style="text-align: center; font-size:16px; color: white">
                <hr>
                <h2>Thông tin người nhận</h2>
            </b>
            <p style="font-weight: bold; font-size: 14px; color: white">
                <i class="ri-user-3-line"></i> Họ tên: {{ $giaoDich->user->hoten }}<strong
                    style="color: #f6e58d;"></strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                <i class="ri-mail-line"></i> Email: <strong
                    style="color: #f6e58d;">{{ $giaoDich->user->email }}</strong>
            </p>

            <p style="font-weight: bold; font-size: 14px; color: white">
                <i class="ri-phone-line"></i> Số điện thoại: <strong
                    style="color: #f6e58d;">{{ $giaoDich->user->sdt }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                <i class="ri-focus-2-line"></i> Địa chỉ: <strong
                    style="color: #f6e58d;">{{ $giaoDich->user->diachi }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                <i class="ri-refund-2-line"></i> Hình thức thanh toán: <strong style="color: #f6e58d;">Chuyển
                    khoản</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Nếu thông tin người nhận không đúng, vui lòng liên hệ tổng dài <i style="color: #f6e58d;">19003333</i>
                để
                được hỗ trợ kịp thời
            </p>

            <hr>
            <b style="text-align: center; font-size:16px; color: white">
                <h2>Thông tin đơn hàng</h2>
            </b>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Mã đơn hàng: <strong style="color: #f6e58d;">{{ $giaoDich->hoadon->idhoadon }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Xe: <strong style="color: #f6e58d;">{{ $giaoDich->xe->tenxe }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Biển số: <strong style="color: #f6e58d;">{{ $giaoDich->xe->bienso }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Ngày nhận xe: <strong style="color: #f6e58d;">{{ $giaoDich->ngaynhanxe }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Ngày trả xe: <strong style="color: #f6e58d;">{{ $giaoDich->ngaytraxe }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Thành tiền: <strong style="color: #f6e58d;">{{ $giaoDich->tongtien }}</strong>
            </p>
            <p style="font-weight: bold; font-size: 14px; color: white">
                Tình trạng đơn hàng: <strong style="color: #f6e58d;"> Đã duyệt</strong>
            </p>
            <i>
                Mọi thông tin chi tiết liên hệ website: <a style="color: f6e58d;"
                    href="https://vietcar.click/">vietcar.click</a> hoặc liên hệ hotline <i
                    style="color: #f6e58d;">19003333</i>. Xin cảm ơn quý khách đã sử dụng của chúng tôi!
            </i><br>
            <p style="font-weight: bold; font-size: 14px; color: white"></p>

        </div>



    </section>


</body>

</html>
