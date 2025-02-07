<style>
    .footer {
        padding: 3rem;
        background: #fff;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .footer-column {
        display: flex;
        flex-direction: column;
    }

    .footer-logo {
        max-width: 100px;
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    .footer-description {
        color: #666;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .footer-title {
        color: #5fcf86;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .footer-link {
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #5fcf86;
    }

    .social-icons {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        transition: transform 0.3s ease;
    }

    .social-icon:hover {
        transform: translateY(-3px);
    }

    .footer-bottom {
        border-top: 1px solid #eee;
        padding-top: 2rem;
        margin-top: 2rem;
    }

    .payment-methods {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .payment-icon {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    #top-up {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #5fcf86;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    #top-up:hover {
        background: #4ab36f;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .footer-bottom {
            text-align: center;
        }

        .payment-methods {
            justify-content: center;
            flex-wrap: wrap;
        }
    }
</style>

<footer class="footer container">
    <div class="footer-content">
        <div class="footer-column">
            <img class="footer-logo" src="/upload/slides/logo.png" alt="VietCar Logo">
            <p class="footer-description">
                Trang Đăng tin và Tìm kiếm thông tin về thuê xe. Chúng tôi kết nối dễ dàng giữa người thuê và người cho
                thuê,
                cung cấp những bộ lọc tìm kiếm thông minh để tìm kiếm xe phù hợp với nhu cầu của bạn.
            </p>
            <div class="social-icons">
                <a href="#" class="footer-link">
                    <img class="social-icon" src="upload/slides/t.png" alt="Twitter">
                </a>
                <a href="#" class="footer-link">
                    <img class="social-icon" src="upload/slides/youtube.png" alt="YouTube">
                </a>
                <a href="#" class="footer-link">
                    <img class="social-icon" src="upload/slides/facebook.png" alt="Facebook">
                </a>
            </div>
        </div>

        <div class="footer-column">
            <h4 class="footer-title">Công ty</h4>
            <div class="footer-links">
                <a href="#" class="footer-link">Kinh doanh</a>
                <a href="#" class="footer-link">Kênh truyền hình</a>
                <a href="#" class="footer-link">Nhà tài trợ</a>
            </div>
        </div>

        <div class="footer-column">
            <h4 class="footer-title">Về chúng tôi</h4>
            <div class="footer-links">
                <a href="#" class="footer-link">Tính thông dụng</a>
                <a href="#" class="footer-link">Quan hệ đối tác</a>
                <a href="#" class="footer-link">Nhà phát triển</a>
            </div>
        </div>

        <div class="footer-column">
            <h4 class="footer-title">Liên hệ</h4>
            <div class="footer-links">
                <a href="#" class="footer-link">Liên hệ chúng tôi</a>
                <a href="https://thuvienphapluat.vn/van-ban/Cong-nghe-thong-tin/Luat-an-ninh-mang-2018-351416.aspx"
                    class="footer-link">Chính sách quyền riêng tư</a>
                <a href="https://icontract.com.vn/tin-tuc/cac-quy-dinh-ve-dieu-khoan-bao-mat-thong-tin-trong-hop-dong"
                    class="footer-link">Điều khoản và điều kiện</a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p style="color: #666;">
            Hotline: 1900 0000<br>
        </p>
        <a href="#" class="footer-link">
            <img width="100" src="./upload/slides/logobocongthuong.png" alt="Logo Bộ Công Thương">
        </a>
        <p style="color: #666; margin-top: 1rem;">Phương thức thanh toán</p>
        <div class="payment-methods">
            <img class="payment-icon" src="./upload/images/momo.png" alt="MoMo">
            <img class="payment-icon" src="./upload/images/vnpay.png" alt="VNPay">
            <img class="payment-icon" src="./upload/images/visa.png" alt="Visa">
            <img class="payment-icon" src="./upload/images/zalopay.png" alt="ZaloPay">
        </div>
    </div>
</footer>

<div id="top-up" title="Về đầu trang">
    <i class="fas fa-arrow-up"></i>
</div>
{{-- 
<script>
    $(function() {
        var offset = 400;
        var duration = 500;

        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('#top-up').fadeIn(duration);
            } else {
                $('#top-up').fadeOut(duration);
            }
        });

        $('#top-up').click(function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        });
    });
</script> --}}
