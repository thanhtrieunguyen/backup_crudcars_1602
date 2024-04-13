<style>
    #top-up {
        font-size: 2rem;
        cursor: pointer;
        position: fixed;
        z-index: 9999;
        color: #5fcf86;
        bottom: 20px;
        right: 15px;
        display: none;
    }

    #top-up:hover {
        color: #333
    }



    footer {

        position: relative;
        display: grid;
        grid-template-columns: 400px repeat(3, 1fr);
        gap: 2rem;
        border-bottom: 1px solid #f5f5f5;

    }

    footer .column .logo {
        max-width: 100px;
        margin-bottom: 2rem;

    }

    footer .column .socials {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    footer .column h4 {
        color: #5fcf86;
        margin-bottom: 2rem;
        font-size: 1.2rem;
        font-weight: 500;
    }

    footer .column>a {
        display: block;
        color: black;
        margin-bottom: 1rem;
        transition: all 0.2s ease;
    }

    footer .column>a:hover {
        color: #5fcf86;
    }

    .payment {
        display: flex;
    }

    .horizontal-line1 {
        margin-bottom: 50px;
    }
</style>

<hr class="horizontal-line1">
<footer class="container">
    <div class="column">
        <div class="logo">
            <img width="100px" src="/upload/slides/logo.png">
        </div>
        <p>
            Trang Đăng tin và Tìm kiếm thông tin về <a href="/thue-xe" style="color: blue">thuê</a> xe.
            Chúng tôi kết nối dễ dàng giữa người thuê và người cho thuê. Đồng thời cung
            cấp những bộ lọc tìm kiếm thông minh, giúp dễ dàng trong việc tìm kiếm
            các thông tin xe phù hợp với nhu cầu của người dùng.

        </p>
        <div class="socials">
            <a href="#"><img width="40px" src="upload/slides/t.png"></i></a>
            <a href="#"><img width="40px" src="upload/slides/youtube.png"></a>
            <a href="#"><img width="40px" src="/upload/slides/facebook.png"></a>
        </div>
    </div>
    <div class="column">
        <h4>Công ty</h4>
        <a href="#">Kinh doanh</a>
        <a href="#">kênh truyền hình</a>
        <a href="#">Nhà tài trợ</a>
    </div>

    <div class="column">
        <h4>Về chúng tôi</h4>
        <a href="#">Tính thông dụng</a>
        <a href="#">Quan hệ đối tác</a>
        <a href="#">Nhà phát triển</a>
    </div>

    <div class="column">
        <h4>Liên hệ</h4>
        <a href="#">Liên hệ chung tôi</a>
        <a href="https://thuvienphapluat.vn/van-ban/Cong-nghe-thong-tin/Luat-an-ninh-mang-2018-351416.aspx">Chính
            sách quyền riêng tư</a>
        <a
            href="https://icontract.com.vn/tin-tuc/cac-quy-dinh-ve-dieu-khoan-bao-mat-thong-tin-trong-hop-dong#:~:text=%C4%90i%E1%BB%81u%20kho%E1%BA%A3n%20b%E1%BA%A3o%20m%E1%BA%ADt%20(confidentiality,m%E1%BA%ADt%20nh%E1%BB%AFng%20th%C3%B4ng%20tin%20%C4%91%C3%B3.">Điều
            khoản và điều kiện</a>
    </div>

    <p style="color: black;">
        Hotline: 1900 3333 <br>
        Mr.Group 6
        <a href="#" class="logo-gorvement">
            <img width="100px" src="./upload/slides/logobocongthuong.png" alt="">
        </a>
    <p>Phương thức thanh toán</p>
    <div class="socials">
        <img width="40px" src="./upload/images/momo.png" alt="">
        <img width="40px" src="./upload/images/vnpay.png" alt="">
        <img width="40px" src="./upload/images/visa.png" alt="">
        <img width="40px" src="./upload/images/zalopay.png" alt="">
    </div>
    </p>
    {{-- <script src=" script.js"></script> --}}
</footer>
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script src="js/carouseller.js"></script>
<script src="js/jquery.easing.1.3.js"></script> --}}
{{-- <script type="text/javascript" src="libs/fancybox/jquery.fancybox.min.js"></script> --}}

<script>
    function formatNumber(input) {
        // Xóa tất cả ký tự không phải số và ký tự dấu phẩy khỏi giá trị của input
        var value = input.value.replace(/[^0-9]/g, '');

        // Gán giá trị đã định dạng lại vào input
        input.value = value;
    }
</script>

{{-- <script>
    $(".quick-buy-form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './process_cart.php?action=add',
            data: $(this).serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 0) { //Có lỗi
                    alert(response.message);
                } else { //Mua thành công
                    alert(response.message);
                    //                                    location.reload();
                }
            }
        });
    });
</script> --}}

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
    integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script>
    var offset = 400;
    var duration = 750;
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset)
                $('#top-up').fadeIn(duration);
            else
                $('#top-up').fadeOut(duration);
        });
        $('#top-up').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, duration);
        });
    });
</script>
<div title="Về đầu trang" id="top-up">
    <i class="fas fa-arrow-circle-up"></i>
</div>
{{-- <script type="text/javascript">
    $(function() {
        $('#product-slide').carouseller();
    });
</script> --}}

</body>

</html>
