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


    </div>

    <div class="row mt-5">
        <div class="col-12 my-3">
            <h4 class="text-center text-uppercase lead display-4">Xe tốt nhất</h4>
        </div>
        <ul class="product" style="justify-content: flex-start">
            @foreach ($xes as $xe)
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
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <span class="label-pos"><span class="rent">Đặt xe nhanh <svg width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9733 7.70015L8.46667 14.2668C8.29334 14.5268 8.01335 14.6668 7.71335 14.6668C7.62002 14.6668 7.52667 14.6535 7.43334 14.6268C7.05334 14.5068 6.79335 14.1668 6.79335 13.7735V10.0135C6.79335 9.86015 6.64667 9.72682 6.46667 9.72682L3.78001 9.6935C3.44001 9.6935 3.12668 9.50016 2.97335 9.20682C2.82668 8.92016 2.84668 8.5735 3.03335 8.30017L7.53335 1.7335C7.76001 1.40016 8.18001 1.25349 8.56668 1.37349C8.94668 1.49349 9.20668 1.83349 9.20668 2.22682V5.98683C9.20668 6.14017 9.35335 6.2735 9.53335 6.2735L12.22 6.30682C12.56 6.30682 12.8733 6.49349 13.0267 6.79349C13.1733 7.08016 13.1533 7.42682 12.9733 7.70015Z"
                                            fill="#FFC634"></path>
                                    </svg></span></span>
                            <div class="fix-img">
                                <a href="{{ route('xe.show', ['id' => $xe->idxe]) }}" class="product-thumb">
                                    <img src="{{ $img1 }}" class="" alt="{{ $xe->tenxe }}"
                                        style="width: 100%; height:190px ">
                                </a>
                            </div>
                            <a class="rent-now">Thuê Xe</a>
                            <!-- xem xe chi tiet -->
                        </div>
                        <div class="product-info">
                            <div class="group-tag">
                                <span class="tag-item transmission">{{ $xe->truyendong }}</span>
                                <span class="tag-item non-mortgage">{{ $xe->nhienlieu }}</span>
                            </div>
                            <div class="product-name">
                                <p>{{ $xe->tenxe }}</p>
                            </div>
                            <div class="group-total" style="margin-bottom: 14px;">
                                <div class="info"><i class="ti-car" style=""></i></div>
                                <span class="info">{{ $xe->dongxe->tendongxe }}</span>
                                <span class="info">•</span>
                                <span class="info">{{ $xe->hangxe->tenhangxe }}</span>
                            </div>
                            <div class="line-page"></div>
                            <div class="product-price">
                                <div class="price">
                                    <span class="price-special">{{ number_format($xe->gia) }}K</span>/&nbsp;ngày
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            <div class="col-12 text-center mt-4">
                <a href="/thuexe" class="btn btn-success">Xem thêm</a>
            </div>
        </ul>
    </div>
    <section class="dishes" id="dishes">

        <h1 class="heading">Ưu Điểm Của Vietcar</h1>
        <h3 class="sub-heading">
            Những tính năng giúp bạn dễ dàng hơn khi thuê xe trên Vietcar.
        </h3>
        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src="/upload/slides/laixe.svg" alt="" />
                <h3>Lái xe an toàn cùng Vietcar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Chuyến đi trên Vietcar được bảo vệ với Gói bảo hiểm thuê xe tự lái từ MIC & VNI.
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
                    Giấy phép lái xe là bạn đã đủ điều kiện thuê xe trên Vietcar.</span>

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

            {{-- <form action="{{ url('comment/' . $xe->id) }}" method="post" role="form">
                @csrf
                
            </form> --}}
        @endif


    </section>

@endsection
