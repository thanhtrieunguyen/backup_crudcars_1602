@extends('layouts.index')

<head>
    <title>Liên Hệ VietCar</title>
    <link rel="icon" type="image/x-icon" href="icons/contact.png">
    <style>
        :root {
            --primary-color: #5fcf86;
            --secondary-color: #4ab36f;
            --text-color: #002B3D;
            --background-color: #f4f7f6;
        }

        .contact-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 30px;
            color: var(--text-color);
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-color);
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(95, 207, 134, 0.2);
        }

        .submit {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit:hover {
            background-color: var(--secondary-color);
        }

        .contact-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .input-row {
                display: block;
            }

            .input-group {
                width: 100%;
            }
        }
    </style>
</head>

@section('content')
    <section id="contact" style="margin: auto">
        <div class="contact-container">
            <div class="contact-header">
                <h1>Liên Hệ Với VietCar</h1>
                <p>Chúng tôi luôn sẵn lòng hồi đáp lại phản hồi của bạn!</p>
            </div>

            <form method="post" action="{{ route('contact') }}">
                @csrf
                <div class="input-row" style="display: flex; gap: 15px;">
                    <div class="input-group" style="flex: 1;">
                        <label>Họ và tên</label>
                        <input type="text" placeholder="Nhập tên của bạn" name="name" required>
                    </div>
                    <div class="input-group" style="flex: 1;">
                        <label>Số điện thoại</label>
                        <input type="text" placeholder="(+84) 000000000" name="phone" required>
                    </div>
                </div>

                <div class="input-row" style="display: flex; gap: 15px;">
                    <div class="input-group" style="flex: 1;">
                        <label>Email</label>
                        <input type="email" placeholder="Nhập email của bạn" name="email" required>
                    </div>
                    <div class="input-group" style="flex: 1;">
                        <label>Địa chỉ</label>
                        <input type="text" placeholder="Nhập địa chỉ của bạn" name="address" required>
                    </div>
                </div>

                <div class="input-group">
                    <label>Nội dung</label>
                    <textarea rows="5" placeholder="Nội dung của bạn" name="content" required></textarea>
                </div>

                <input type="submit" value="GỬI NGAY" class="submit">
            </form>

            <div class="contact-info">
                <h4>Thông tin VietCar</h4>
                <table class="table">
                    <tr>
                        <td>Email</td>
                        <td>vietcar@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>(+84) 000000000</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>18A Cộng Hoà, Phường 4, Quận Tân Bình, TP.HCM</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="input-row" style="display: flex; gap: 15px; margin-top: 30px;">
            <div class="input-group" style="flex: 1;">
                <h4>Bản đồ</h4>
            </div>
            <div class="input-group" style="flex: 2;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.880150568344!2d106.6518412749081!3d10.800021089350182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292976c117ad%3A0x5b3f38b21051f84!2zSOG7jWMgVmnhu4duIEjDoG5nIEtow7RuZyBWaeG7h3QgTmFtIENTMg!5e1!3m2!1svi!2s!4v1738937560465!5m2!1svi!2s"
                    width="50" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
@endsection
