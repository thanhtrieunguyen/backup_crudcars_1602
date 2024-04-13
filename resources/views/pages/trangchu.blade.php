@extends('layouts.index')

<head>
    <link rel="icon" type="image/x-icon" href="upload/slides/car.png">
</head>
@section('content')
    <link rel="stylesheet" href="css/style.css">

    <marquee>VietCar-Dịch cho thuê xe 4-7-16 chỗ hàng đầu Việt Nam.Thông báo chương trình đồ án cơ sở ngành năm 2023-2024
        bắt đầu từ ngày 1/1/2024 đến hết ngày 30/5/2024</marquee>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner rounded-lg shadow border-0">
            <div class="carousel-item active banner__img " style="text-align: center;">
                <h1>VietCar - Cùng Bạn Đến Mọi Hành Trình</h1><br>
                <div class="horizontal-line"></div><br>
                <h6>Trải nghiệm sự khác biệt từ <span>hơn 1000</span> xe gia đình đời mới khắp Việt Nam</h6>
                <h6>Hotline: 19003333</h6>
            </div>

            <div class="carousel-item ">
                <img width="200" src="/upload/slides/slide-1.jpg" class="d-block w-100 " alt="slide1">
            </div>
            <div class="carousel-item">
                <img src="/upload/slides/slide-2.jpg" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item">
                <img src="/upload/slides/slide-5.jpeg" class="d-block w-100" alt="slide3">
            </div>
            <div class="carousel-item">
                <img src="/upload/slides/slide-6.jpg" class="d-block w-100" alt="slide3">
            </div>
            <div class="carousel-item">
                <img src="/upload/slides/slide-7.jpg" class="d-block w-100" alt="slide3">
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="banner__search-option">
            <div class="option">
                <div class="option-item active">
                    <i class='bx bx-car'></i>
                    <p>Xe tự lái</p>
                </div>
                <div class="option-item active">
                    <i class='bx bx-car'></i>
                    <p>Xe có tài xế</p>
                </div>
                <div class="option-item active">
                    <i class='bx bx-car'></i>
                    <p>Thuê xe dài hạn</p>
                </div>
            </div>
            <div class="search">
                <div class="search-form">
                    <div class="search-form__item time">
                        <div class="title">
                            <i class='bx bx-current-location'></i>
                            <span>Địa điểm</span>
                        </div>
                        <div class="choose">
                            <input class="input-search" type="text" placeholder="Bạn muốn đi đâu?">
                            <div class="autobox">
                                <li>Hồ Chí Minh</li>
                                <li>Hà Nội</li>
                                <li>Hải Phòng</li>
                                <li>Đà Nẵng</li>
                                <li>Cần Thơ</li>
                                <li>Vĩnh Long</li>
                                <li>Bến Tre</li>
                                <li>Đồng Tháp</li>
                                <li>Long An</li>
                                <li>Bình Dương</li>
                                <li>Cà Mau</li>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="vertical-line"></div> -->

                    <div class="search-form__item time">
                        <div class="title">
                            <i class='bx bx-calendar'></i>
                            <span>Bắt đầu</span>
                        </div>
                        <div class="choose">
                            <input type="text" placeholder="Ngày bắt đầu">
                        </div>
                    </div>

                    <div class="vertical-line"></div>

                    <div class="search-form__item time">
                        <div class="title">
                            <i class='bx bx-calendar'></i>
                            <span>Kết thúc</span>
                        </div>
                        <div class="choose">
                            <input type="text" placeholder="Ngày kết thúc">
                        </div>
                    </div>

                    <a href="#" class="find-car">Tìm&nbspxe</a>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 my-3">
            <h4 class="text-center text-uppercase lead display-4">Xe tốt nhất</h4>
        </div>
        @foreach ($xes as $xe)
            <div class="col-md-3 mb-4">
                @php
                    $array = json_decode($xe->hinhxe->hinhxe);
                    $img1 = null;
                    foreach ($array as $imagePath) {
                        $imageSize = getimagesize($imagePath);
                        if ($imageSize !== false && $imageSize[0] <= 1440 && $imageSize[1] <= 1080) {
                            $img1 = $imagePath;
                            break;
                        }
                    }
                @endphp

                <div class="card shadow rounded-lg border-0 overflow-hidden">
                    <a href="{{ route('xe.show', ['id' => $xe->idxe]) }}" target="_blank" class="fix-img">
                        <img src="{{ $img1 }}" class="" alt="{{ $xe->tenxe }}"
                            style="width: 100%; height:190px ">
                    </a>
                    <div class="card-body desc-car">
                        <a href="{{ route('xe.show', $xe->idxe) }}" target="_blank"
                            class="text-dark text-decoration-none">
                            <div class="desc-name">
                                <p>{{ $xe->tenxe }}</p>
                            </div>
                        </a>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="card-text d-flex flex-column align-content-between">
                                <span class="font-weight-normal">{{ $xe->dongxe->tendongxe }}
                                </span>
                                <span class="font-weight-normal">{{ $xe->hangxe->tenhangxe }}
                                </span>

                            </div>
                            <div class="card-text cost">Giá thuê <p class="cost"><span
                                        class="text-primary">{{ number_format($xe->gia) }}
                                        đồng</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 text-center mt-4">
            <a href="/thuexe" class="btn btn-success">Xem thêm</a>
        </div>
    </div>
    <section class="dishes" id="dishes">

        <h1 class="heading">Ưu Điểm Của Mioto</h1>
        <h3 class="sub-heading">
            Những tính năng giúp bạn dễ dàng hơn khi thuê xe trên Mioto.
        </h3>
        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="/upload/slides/laixe.svg" alt="" />
                <h3>Lái xe an toàn cùng Mioto</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Chuyến đi trên Mioto được bảo vệ với Gói bảo hiểm thuê xe tự lái từ MIC & VNI.
                    Khách thuê sẽ chỉ bồi thường tối đa 2,000,000VNĐ trong trường hợp có sự cố ngoài ý muốn.</span>

            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="./upload/slides/datxe.svg" alt="" />
                <h3>An tâm đặt xe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Không tính phí huỷ chuyến trong vòng 1h sau khi đặt cọc.
                    Hoàn cọc và bồi thường 100% nếu chủ xe huỷ chuyến trong vòng 7 ngày trước chuyến đi</span>

            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="./upload/slides/thutuc.svg" alt="" />
                <h3>Thủ tục đơn giản</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Chỉ cần có CCCD gắn chip (Hoặc Passport) &
                    Giấy phép lái xe là bạn đã đủ điều kiện thuê xe trên Mioto.</span>

            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="/upload/slides/thanhtoan.svg" alt="" />
                <h3>Thanh toán dễ dàng</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Đa dạng hình thức thanh toán: ATM, thẻ Visa & Ví điện tử (Momo, VnPay, ZaloPay).</span>

            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="./upload/slides/giaoxe.svg" alt="" />
                <h3>Giao xe tận nơi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Bạn có thể lựa chọn giao xe tận nhà/sân bay... Phí tiết kiệm chỉ từ 15k/km.</span>

            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="/upload/slides/dongxe.svg" alt="" />
                <h3>Dòng xe đa dạng</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Hơn 100 dòng xe cho bạn tuỳ ý lựa chọn: Mini, Sedan, CUV, SUV, MPV, Bán tải.</span>


            </div>
    </section><br>
    <div id="wrapper1">
        <div id="title_wrapper">
            <h2>Hướng Dẫn Thuê Xe</h2>
            <h5 class="title">Chỉ với 4 bước đơn giản để trải nghiệm thuê xe VietCar một cách nhanh chóng</h5>
        </div>
        <div id="container_wrapper1">
            <div class="container_item">
                <div class="item_pic">
                    <img loading="lazy" src="/upload/slides/item1.svg" alt="cho thuê xe giá rẻ TP Hồ Chí Minh">
                </div>
                <div class="item_content">
                    <h5 class="text_primary">01</h5>
                    <h5>
                        Đặt xe trên
                        <br>
                        web VietCar
                    </h5>
                </div>
            </div>
            <div class="container_item">
                <div class="item_pic">
                    <img loading="lazy" src="/upload/slides/item2.svg" alt="cho thuê xe giá rẻ TP Hồ Chí Minh">
                </div>
                <div class="item_content">
                    <h5 class="text_primary">02</h5>
                    <h5>
                        Nhận xe
                    </h5>
                </div>
            </div>
            <div class="container_item">
                <div class="item_pic">
                    <img loading="lazy" src="/upload/slides/item3.svg" alt="cho thuê xe giá rẻ TP Hồ Chí Minh">
                </div>
                <div class="item_content">
                    <h5 class="text_primary">03</h5>
                    <h5>
                        Bắt đầu
                        <br>
                        hành trình
                    </h5>
                </div>
            </div>
            <div class="container_item">
                <div class="item_pic">
                    <img loading="lazy" src="/upload/slides/item4.svg" alt="cho thuê xe giá rẻ TP Hồ Chí Minh">
                </div>
                <div class="item_content">
                    <h5 class="text_primary">04</h5>
                    <h5>
                        Trả xe & kết thúc
                        <br>
                        chuyến đi
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div id="khung">
        <div id="container_khung">
            <h2>VIETCAR BLOG</h2>
            <div id="blog_container">
                <div id="blog_wrap_left">
                    <a class="blog_item" href="/blo-g">
                        <div class="blog_item_img">
                            <img loading="lazy" src="/upload/slides/blog1.jpg" alt="VIETCAR- thuê xe tự lái">

                        </div>
                        <div class="blog_item_content">
                            <p class="time">24-01-2024</p>
                            <p class="name">Thuê xe ô tô tự lái: An tâm đưa gia đình đi muôn nơi dịp Tết Nguyên Đán</p>
                        </div>
                    </a>
                    <a class="blog_item" href="/blo-g">
                        <div class="blog_item_img">
                            <img loading="lazy" src="/upload/slides/blog2.jpg" alt="VIETCAR- thuê xe tự lái">
                        </div>
                        <div class="blog_item_content">
                            <p class="time">29-1-2024</p>
                            <p class="name">Thuê xe ô tô tự lái: Tự do trải ngiệm lễ Giáng sinh đáng nhớ</p>
                        </div>
                    </a>
                </div>
                <div id="blog_wrap_right">
                    <a class="blog_item" href="/blo-g">
                        <div class="blog_item_img">
                            <img loading="lazy" src="/upload/slides/blog3.jpg" alt="VIETCAR- thuê xe tự lái">
                        </div>
                        <div class="blog_item_content">
                            <p class="time">30-11-2023</p>
                            <p class="name">Thuê xe ô tô tự lái giá rẻ tại quận 3: sự lựa chọn không giới hạn</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <section class="review" id="review">
        <h3 class="sub-heading" id="a1">Đánh giá của khách hàng</h3>
        <h1 class="heading">HỌ NÓI GÌ?</h1>

        @if (auth()->check())
            @if (session('thongbao'))
                {{ session('thongbao') }}
            @endif

            <form action="{{ url('comment/' . $xe->id) }}" method="post" role="form">
                @csrf
                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="box1">
                        @vinhnguyen2004 <i>3 tháng trước</i>
                        <p>xe tốt lắm nha mọi người. Lần sau có nhu cầu mình đặt tiếp</p><br>
                    </div>

                    <div class="box1">
                        @vinhpham2004 <i>10 tháng trước</i>
                        <p>Tốt ngoài mong đợi</p><br>
                    </div>

                    <div class="box1">
                        @thanhtrieuqa2004 <i>2 tuần trước</i>
                        <p>Ngon bổ rẻ lắm nha ae. Bú bú bú</p><br>
                    </div class="box1">

                    <div class="box1">
                        @vudixbd2004 <i>1 tháng trước</i>
                        <p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p><br>
                    </div>

                    <div class="box1">
                        @hehehe <i>1 tháng trước</i>
                        <p>Dume xe ngon vl ae à. Nên đặt thử 1 lần nha</p><br>
                    </div>

                    <div class="box1">
                        @trungper08 <i>100 năm trước</i>
                        <p>Ngon nha mấy ní. Tui có sổ hộ nghèo được thuê free nha </p><br>
                    </div>

                </div>
            </form>
        @endif


    </section>

@endsection
