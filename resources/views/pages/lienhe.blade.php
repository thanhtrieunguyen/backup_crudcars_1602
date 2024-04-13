@extends('layouts.index')

<head>
    <title>
        Contact
    </title>
    <link rel="icon" type="image/x-icon" href="icons/contact.png">
</head>
@section('content')
    <section id="contact"><br><br>
        <h1>Liên hệ với chúng tôi</h1>
        <p>Chúng tôi luôn sẵn lòng hồi đáp lại phản hồi của bạn khi có thể !</p>
        <div class="contact-box">
            <div class="contact-box-left">
                <h3 style="color: #002B3D;">Nhập thông tin</h3>
                <form method="post" action="./../public/functions/contact/contatc.php">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Họ và tên</label>
                            <input type="text" placeholder="Nhập tên của bạn" name="name">
                        </div>

                        <div class="input-group">
                            <label>Số điện thoại</label>
                            <input type="text" placeholder="(+84) 816232452" name="phone">
                        </div>

                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="" name="email">
                        </div>

                        <div class="input-group">
                            <label>Địa chỉ</label>
                            <input type="text" placeholder=" "name="address">
                        </div>
                    </div>

                    <label>Nội dung</label>
                    <textarea rows="5" placeholder="Nội dung của bạn" name="content"></textarea>
                    <input type="submit" value="GỬI" class="submit" name="submit">
                </form>
            </div>

            <div class="contact-box-right">
                <h4>Thông tin về chúng tôi</h4>
                <h3 style="font-size: 30px;">VietCar</h3>
                <table>
                    <tr>
                        <td><i class="fa-solid fa-envelope"></i>Email</td>
                        <td>vietcar@gmail.com</td>
                    </tr>

                    <tr>
                        <td><i class="fa-solid fa-phone"></i>Số điện thoại</td>
                        <td>(+84) 816232452</td>
                    </tr>

                    <tr>
                        <td><i class="fa-solid fa-location-dot"></i>Địa chỉ</td>
                        <td>18A Cộng Hoà, Phường 4, Quận Tân Bình, Thành phố Hồ Chí Minh</td>
                    </tr>

                    <tr>
                        <td><i class="fa-solid fa-globe"></i>Website</td>
                        <td>www.vietcar.click</td>
                    </tr>

                    <tr>
                        <td><i class="fa-brands fa-facebook"></i>Facebook</td>
                        <td>Thuê Xe VietCar</td>
                    </tr>


                    <tr>
                        <td><i class="fa-brands fa-instagram"></i>Instagram</td>
                        <td>@_VietCar</td>
                    </tr>
                </table>
            </div>
        </div>
        <section class="map">
            <h2 style="text-align: center;">Bản đồ vị trí</h2>
            <p style="text-align: center;">Xác định địa điểm của bạn nhanh chóng hơn</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15676.805707878355!2d106.64669143391502!3d10.795879313210166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292976c117ad%3A0x5b3f38b21051f84!2zSOG7jWMgdmnhu4duIEjDoG5nIGtow7RuZyBWaeG7h3QgTmFtIC0gQ1My!5e0!3m2!1svi!2sus!4v1704558397733!5m2!1svi!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


    </section>
@endsection
