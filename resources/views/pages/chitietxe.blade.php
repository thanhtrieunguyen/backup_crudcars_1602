@extends('layouts.index')

<head>
    <title>{{ $xe->tenxe }}</title>
</head>

@section('content')

    <div class="">
        @php
            $array = json_decode($xe->hinhxe->hinhxe);
            $img1 = isset($array[0]) ? $array[0] : null;
            $img2 = isset($array[1]) ? $array[1] : null;
            $img3 = isset($array[2]) ? $array[2] : null;
            $img4 = isset($array[3]) ? $array[3] : null;
        @endphp
        <div class="card rounded-lg border-0 mt-4">
            <section class="body">
                <div class="cover-car">
                    <div class="m-container">
                        <div class="cover-car-container">
                            <div class="main-img">
                                <div class="cover-car-item">
                                    <img src="{{ $img1 }}" alt="">
                                </div>
                            </div>
                            <div class="sub-img">
                                <div class="cover-car-item">
                                    <img src="{{ $img2 }}" alt="{{ $xe->tenxe }}">
                                </div>
                                <div class="cover-car-item">
                                    <img src="{{ $img3 }}" alt="{{ $xe->tenxe }}">
                                </div>
                                <div class="cover-car-item">
                                    <img src="{{ $img4 }}" alt="{{ $xe->tenxe }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-car">
                    <div class="m-container">
                        <div class="detail-container">
                            <div class="content-detail">
                                <div class="info-car-basic">
                                    <div class="group-name">
                                        <h3 class="js_ten_xe">{{ $xe->tenxe }}</h3>
                                        <div class="group-action d-flex-center-btw">
                                            <div class="shared">
                                                <div class="wrap-svg wrap-ic share"></div>
                                                <div class="fav-item wrap-ic wrap-svg"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-total">
                                        <div class="info"><i class="ti-car"></i></div>
                                        <span class="info">{{ $xe->dongxe->tendongxe }}</span>
                                        <span class="info">•</span>
                                        <span class="info">{{ $xe->hangxe->tenhangxe }}</span>
                                    </div>
                                    <div class="group-tag">
                                        <span class="tag-item transmission">{{ $xe->truyendong }}</span>
                                        @if ($xe->nhienlieu == 'Xăng')
                                            <span class="tag-item non-mortgage">{{ $xe->nhienlieu }}</span>
                                        @elseif ($xe->nhienlieu == 'Dầu diesel')
                                            <span class="tag-item non-mortgage-oil">{{ $xe->nhienlieu }}</span>
                                        @else
                                            <span class="tag-item non-mortgage-elec">{{ $xe->nhienlieu }}</span>
                                        @endif
                                        @php
                                            $string = $xe->bienso;

                                            // Insert hyphen after the third character
                                            $string = substr($string, 0, 3) . '-' . substr($string, 3);

                                            // Insert decimal point before the last two characters
                                            $string = substr_replace($string, '.', -2, 0);
                                        @endphp
                                        <span class="tag-item non-mortgage js_bien_so">{{ $string }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-detail">
                                <div class="rent-box" id="cardetail" style="position: relative;">
                                    <div class="price">
                                        <h4>{{ number_format($xe->gia) }}K/ngày</h4>
                                    </div>
                                    <div class="date-time-form ">
                                        <div class="form-item"><label>Nhận xe </label>
                                            <div class="wrap-date-time">
                                                <div class="wrap-date"><input type="date"
                                                        class="form-control js_ngay_nhan_xe" name="ngaynhanxe"
                                                        id="ngayNhanXe" placeholder="dd-mm-yyyy" min="{{ date('Y-m-d') }}"
                                                        max="{{ date('Y-m-d', strtotime('+3 months')) }}"></div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-item"><label>Trả xe</label>
                                            <div class="wrap-date-time">
                                                <div class="wrap-date"><input type="date"
                                                        class="form-control js_ngay_tra_xe" name="ngaytraxe" id="ngayTraXe"
                                                        placeholder="dd-mm-yyyy" min="{{ date('Y-m-d') }}"
                                                        max="{{ date('Y-m-d', strtotime('+4 months')) }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-form "><label>Địa điểm giao nhận xe</label>
                                        <div class="wrap-form has-arrow"><span class="value">Vietcar</span>
                                        </div>
                                    </div>
                                    <div class="line-page"></div>
                                    <div class="price-container">
                                        <div class="price-item">
                                            <p class="df-align-center">Đơn giá thuê</p>
                                            <p class="cost"><span class="js_don_gia">{{ number_format($xe->gia) }}đ/
                                                    ngày</span></p>
                                        </div>
                                        <div class="line-page"></div>
                                        <div class="price-item">
                                            <p>Tổng cộng</p>
                                            <p class="cost"><span>{{ number_format($xe->gia) }}đ </span>x&nbsp;<span
                                                    class="js_so_ngay_thue"></span>&nbsp;ngày</p>
                                        </div>
                                        <div class="line-page"></div>
                                        <div class="price-item total">
                                            <p>Thành tiền</p>
                                            <p class="cost"><span class="js_thanh_tien"> đồng</span></p>
                                        </div>
                                    </div>
                                    @if (auth()->check())
                                        <a class="btn btn-primary btn--m width-100 js_btn_dat_xe">
                                            <i class="fa-solid fa-bolt-lightning"
                                                style="font-size: 1rem !important;"></i>CHỌN THUÊ
                                        </a>
                                    @else
                                        <span>Vui lòng <a href="{{ route('pages.dangnhap') }}"
                                                class="text-primary mx-1">Đăng nhập</a> để đặt
                                            xe</span>
                                    @endif

                                </div>
                                <div class="surcharge">
                                    <p class="title text-primary">Phụ phí có thể phát sinh</p>
                                    <div class="surcharge-container hide">
                                        <div class="surcharge-item">
                                            <div class="wrap-svg">
                                                <i class="ti-info-alt"></i>
                                            </div>
                                            <div class="content">
                                                <div class="content-item">
                                                    <p class="title">Phí vượt giới hạn</p>
                                                    <p class="cost"><span>Không tính phí</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="surcharge-item">
                                            <div class="wrap-svg">
                                                <i class="ti-info-alt"></i>
                                            </div>
                                            <div class="content">
                                                <div class="content-item">
                                                    <p class="title">Phí quá giờ</p>
                                                    <p class="cost"><span>80 000đ/h</span></p>
                                                </div>
                                                <div class="content-item">
                                                    <p>Phụ phí phát sinh nếu hoàn trả xe trễ giờ. Trường hợp trễ
                                                        quá<span> 4 tiếng</span>, phụ phí thêm <span>1 ngày </span>thuê
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="surcharge-item">
                                            <div class="wrap-svg"> <i class="ti-info-alt"></i>
                                            </div>
                                            <div class="content">
                                                <div class="content-item">
                                                    <p class="title">Phí vệ sinh</p>
                                                    <p class="cost"><span>120 000đ</span></p>
                                                </div>
                                                <div class="content-item">
                                                    <p>Phụ phí phát sinh khi xe hoàn trả không đảm bảo vệ sinh (nhiều
                                                        vết bẩn, bùn cát, sình lầy...)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="surcharge-item">
                                            <div class="wrap-svg"> <i class="ti-info-alt"></i>
                                            </div>
                                            <div class="content">
                                                <div class="content-item">
                                                    <p class="title">Phí khử mùi</p>
                                                    <p class="cost"><span>200 000đ</span></p>
                                                </div>
                                                <div class="content-item">
                                                    <p>Phụ phí phát sinh khi xe hoàn trả bị ám mùi khó chịu (mùi thuốc
                                                        lá, thực phẩm nặng mùi...)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-detail">
                                <div class="line-page"></div>
                                <div class="info-car-desc" id="outsfeatures">
                                    <h6>Đặc điểm</h6>
                                    <div class="outstanding-features">
                                        <div class="outstanding-features__item">
                                            <div class="wrap-svg"><svg width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.914 23.3289C10.9148 23.3284 10.9156 23.3279 10.9163 23.3274C10.9155 23.3279 10.9148 23.3284 10.914 23.3289ZM10.914 23.3289C10.914 23.3289 10.914 23.3289 10.914 23.3289L11.3128 23.9114M10.914 23.3289L11.3128 23.9114M11.3128 23.9114L10.9807 23.2882L20.6697 23.9458C20.6682 23.9484 20.6656 23.9496 20.6631 23.9479C20.655 23.9424 20.6343 23.9284 20.6014 23.9074C20.6014 23.9073 20.6014 23.9073 20.6013 23.9073C20.5141 23.8516 20.3413 23.7468 20.0921 23.6208C20.0919 23.6207 20.0918 23.6206 20.0917 23.6206C19.3397 23.2404 17.8926 22.6674 16.0003 22.6674C14.1715 22.6674 12.7584 23.2026 11.9869 23.5817L11.9929 23.5929M11.3128 23.9114L11.331 23.9456C11.3324 23.9483 11.3352 23.9495 11.3377 23.9478C11.3444 23.9432 11.3592 23.9332 11.3821 23.9184L11.9929 23.5929L11.9929 23.5929M11.9929 23.5929C11.9909 23.5892 11.9889 23.5855 11.9868 23.5818C11.6767 23.7342 11.4702 23.8614 11.3821 23.9184L11.9929 23.5929ZM10.6691 24.2983L10.6691 24.2983C10.7406 24.4324 10.8728 24.5792 11.0793 24.6538C11.3072 24.7361 11.5609 24.7039 11.7614 24.5667L11.7614 24.5667C11.7978 24.5418 13.4597 23.4174 16.0003 23.4174C18.5426 23.4174 20.205 24.5432 20.2393 24.5667L20.2393 24.5667C20.4389 24.7034 20.6938 24.7372 20.9245 24.6528C21.1293 24.5779 21.2557 24.4338 21.3233 24.3136L22.4886 22.2427L24.3242 23.0447L21.6934 28.584H9.99882L7.65051 23.0635L9.57427 22.2435L10.6691 24.2983ZM24.4348 22.8117L24.4345 22.8124L24.4348 22.8117Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path
                                                        d="M12.75 4.66675C12.75 3.97639 13.3096 3.41675 14 3.41675H18C18.6904 3.41675 19.25 3.97639 19.25 4.66675V7.00008C19.25 7.13815 19.1381 7.25008 19 7.25008H13C12.8619 7.25008 12.75 7.13815 12.75 7.00008V4.66675Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path
                                                        d="M9.33398 22.6668L9.90564 11.2336C9.95887 10.1692 10.8374 9.3335 11.9031 9.3335H20.0982C21.1639 9.3335 22.0424 10.1692 22.0957 11.2336L22.6673 22.6668"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path d="M14.667 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5">
                                                    </path>
                                                    <path d="M17.334 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5">
                                                    </path>
                                                </svg></div>
                                            <div class="title">
                                                <p class="sub">Số ghế</p>
                                                @php

                                                @endphp
                                                <p class="main">{{ substr($xe->dongxe->tendongxe, 0, 1) }} chỗ</p>
                                            </div>
                                        </div>
                                        <div class="outstanding-features__item">
                                            <div class="wrap-svg"><svg width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M25.9163 7.99992C25.9163 9.05846 25.0582 9.91659 23.9997 9.91659C22.9411 9.91659 22.083 9.05846 22.083 7.99992C22.083 6.94137 22.9411 6.08325 23.9997 6.08325C25.0582 6.08325 25.9163 6.94137 25.9163 7.99992Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <circle cx="23.9997" cy="23.9999" r="1.91667" stroke="#5FCF86"
                                                        stroke-width="1.5"></circle>
                                                    <path
                                                        d="M17.9163 7.99992C17.9163 9.05846 17.0582 9.91659 15.9997 9.91659C14.9411 9.91659 14.083 9.05846 14.083 7.99992C14.083 6.94137 14.9411 6.08325 15.9997 6.08325C17.0582 6.08325 17.9163 6.94137 17.9163 7.99992Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path
                                                        d="M17.9163 23.9999C17.9163 25.0585 17.0582 25.9166 15.9997 25.9166C14.9411 25.9166 14.083 25.0585 14.083 23.9999C14.083 22.9414 14.9411 22.0833 15.9997 22.0833C17.0582 22.0833 17.9163 22.9414 17.9163 23.9999Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <circle cx="7.99967" cy="7.99992" r="1.91667" stroke="#5FCF86"
                                                        stroke-width="1.5"></circle>
                                                    <path
                                                        d="M10.1025 26.6666V21.3333H7.99837C7.59559 21.3333 7.25184 21.4053 6.96712 21.5494C6.68066 21.6918 6.46278 21.894 6.31348 22.1562C6.16244 22.4166 6.08691 22.723 6.08691 23.0754C6.08691 23.4296 6.1633 23.7343 6.31608 23.9895C6.46886 24.243 6.69021 24.4374 6.98014 24.5728C7.26834 24.7083 7.6173 24.776 8.02702 24.776H9.43587V23.8697H8.20931C7.99403 23.8697 7.81521 23.8402 7.67285 23.7812C7.53049 23.7221 7.42459 23.6336 7.35514 23.5155C7.28396 23.3975 7.24837 23.2508 7.24837 23.0754C7.24837 22.8984 7.28396 22.7491 7.35514 22.6275C7.42459 22.506 7.53136 22.414 7.67546 22.3515C7.81782 22.2872 7.9975 22.2551 8.21452 22.2551H8.97493V26.6666H10.1025ZM7.22233 24.2395L5.89681 26.6666H7.1416L8.43848 24.2395H7.22233Z"
                                                        fill="#5FCF86"></path>
                                                    <path
                                                        d="M24 10.6665V15.9998M24 21.3332V15.9998M16 10.6665V21.3332M8 10.6665V15.4998C8 15.776 8.22386 15.9998 8.5 15.9998H24"
                                                        stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                </svg></div>
                                            <div class="title">
                                                <p class="sub">Truyền động</p>
                                                <p class="main">{{ $xe->truyendong }}</p>
                                            </div>
                                        </div>
                                        <div class="outstanding-features__item">
                                            <div class="wrap-svg"><svg width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24.3337 27.2499H7.66699C7.52892 27.2499 7.41699 27.138 7.41699 26.9999V12.4599C7.41699 12.3869 7.44888 12.3175 7.5043 12.27L14.652 6.14344L14.1639 5.574L14.652 6.14344C14.6973 6.1046 14.755 6.08325 14.8147 6.08325H24.3337C24.4717 6.08325 24.5837 6.19518 24.5837 6.33325V26.9999C24.5837 27.138 24.4717 27.2499 24.3337 27.2499Z"
                                                        stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                    <path d="M12.0001 5.33325L7.42285 9.46712" stroke="#5FCF86"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path
                                                        d="M17.888 19.5212L16.7708 15.93C16.5378 15.1812 15.4785 15.1798 15.2436 15.928L14.1172 19.5164C13.7178 20.7889 14.6682 22.0833 16.0019 22.0833C17.3335 22.0833 18.2836 20.7927 17.888 19.5212Z"
                                                        stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                    <path
                                                        d="M23.2503 3.66675V5.66675C23.2503 5.80482 23.1384 5.91675 23.0003 5.91675H14.667C14.5827 5.91675 14.5365 5.8916 14.5072 5.86702C14.4721 5.83755 14.44 5.78953 14.4245 5.72738C14.4089 5.66524 14.4147 5.60775 14.4318 5.56523C14.4461 5.52975 14.4749 5.48584 14.5493 5.44616L18.2993 3.44616C18.3356 3.42685 18.376 3.41675 18.417 3.41675H23.0003C23.1384 3.41675 23.2503 3.52868 23.2503 3.66675Z"
                                                        stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                </svg></div>
                                            <div class="title">
                                                <p class="sub">Nhiên liệu</p>
                                                <p class="main">{{ $xe->nhienlieu }}</p>
                                            </div>
                                        </div>
                                        <div class="outstanding-features__item">
                                            <div class="wrap-svg"><svg width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.41667 24V23.25H6.66667H4.75V18.0833H6.66667H7.41667V17.3333V15.4167H9.33333H9.64399L9.86366 15.197L12.3107 12.75H24.5833V23.25H22.6667H22.356L22.1363 23.4697L19.6893 25.9167H7.41667V24Z"
                                                        stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                    <path d="M24 21.3333H28" stroke="#5FCF86" stroke-width="1.5">
                                                    </path>
                                                    <path d="M24 18.6665H28" stroke="#5FCF86" stroke-width="1.5">
                                                    </path>
                                                    <path
                                                        d="M15.417 7.33325C15.417 6.6429 15.9766 6.08325 16.667 6.08325H20.667C21.3573 6.08325 21.917 6.6429 21.917 7.33325V8.58325H15.417V7.33325Z"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path d="M17.333 9.33325V11.9999M19.9997 9.33325V11.9999"
                                                        stroke="#5FCF86" stroke-width="1.5"></path>
                                                    <path d="M4.66699 26.01L4.66699 15.3308" stroke="#5FCF86"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path d="M27.3291 23.3384L27.3291 16.6704" stroke="#5FCF86"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg></div>
                                            <div class="title">
                                                <p class="sub">NL tiêu hao</p>
                                                <p class="main">{{ $xe->nhienlieutieuhao_km }} lít/Km</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-page"></div>

                                <div class="info-car-desc">
                                    <h6>Miêu tả</h6>

                                    <span class="des">

                                    </span>

                                </div>
                                <div class="line-page"></div>
                                <div class="info-car-desc">
                                    <h6>Các tiện nghi khác</h6>
                                    <div class="features-car">
                                        <ul>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Bản đồ</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/bluetooth-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Bluetooth</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/360_camera-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Camera 360</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/parking_camera-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Camera cập lề</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dash_camera-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Camera hành trình</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/reverse_camera-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Camera lùi</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/impact_sensor-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Cảm biến va chạm</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/head_up-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Cảnh báo tốc độ</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/gps-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Định vị GPS</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/usb-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Khe cắm USB</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/spare_tire-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Lốp dự phòng</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dvd-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Màn hình DVD</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/etc-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> ETC</li>
                                            <li> <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/airbags-v2.png"
                                                    alt="Mioto - Thuê xe tự lái"> Túi khí an toàn</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="line-page"></div>
                                <div class="info-car-desc">
                                    <h6>Điều khoản</h6>
                                    <pre class="">Quy định khác:
◦ Sử dụng xe đúng mục đích.
◦ Không sử dụng xe thuê vào mục đích phi pháp, trái pháp luật.
◦ Không sử dụng xe thuê để cầm cố, thế chấp.
◦ Không hút thuốc, nhả kẹo cao su, xả rác trong xe.
◦ Không chở hàng quốc cấm dễ cháy nổ.
◦ Không chở hoa quả, thực phẩm nặng mùi trong xe.
◦ Khi trả xe, nếu xe bẩn hoặc có mùi trong xe, khách hàng vui lòng vệ sinh xe sạch sẽ hoặc gửi phụ thu phí vệ sinh xe.
Trân trọng cảm ơn, chúc quý khách hàng có những chuyến đi tuyệt vời !</pre>
                                </div> {{-- div dieu khoan --}}
                                <div class="info-car-desc">
                                    <h6>Chính sách huỷ chuyến<br>
                                        <p class="font-16 fontWeight-4 text-gray">Miễn phí hủy chuyến trong vòng 1 giờ sau
                                            khi đặt&nbsp;cọc</p>
                                    </h6>
                                    <div class="cancel-policy">
                                        <div class="column title">
                                            <div class="column__item case">Thời điểm hủy chuyến</div>
                                            <div class="column__item">Khách thuê hủy chuyến</div>
                                            <div class="column__item">Chủ xe hủy chuyến</div>
                                        </div>
                                        <div class="column">
                                            <div class="column__item case">Trong vòng 1h sau giữ chỗ</div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM15.84 10.59L12.32 14.11C12.17 14.26 11.98 14.33 11.79 14.33C11.6 14.33 11.4 14.26 11.26 14.11L9.5 12.35C9.2 12.06 9.2 11.58 9.5 11.29C9.79 11 10.27 11 10.56 11.29L11.79 12.52L14.78 9.53C15.07 9.24 15.54 9.24 15.84 9.53C16.13 9.82 16.13 10.3 15.84 10.59Z"
                                                            fill="#12B76A"></path>
                                                    </svg></div>Hoàn tiền giữ chỗ 100%
                                            </div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM15.84 10.59L12.32 14.11C12.17 14.26 11.98 14.33 11.79 14.33C11.6 14.33 11.4 14.26 11.26 14.11L9.5 12.35C9.2 12.06 9.2 11.58 9.5 11.29C9.79 11 10.27 11 10.56 11.29L11.79 12.52L14.78 9.53C15.07 9.24 15.54 9.24 15.84 9.53C16.13 9.82 16.13 10.3 15.84 10.59Z"
                                                            fill="#12B76A"></path>
                                                    </svg></div>Không tốn phí<span>(Đánh giá hệ thống 3*)</span>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="column__item case">Trước chuyến đi &gt;7 ngày</div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM15.84 10.59L12.32 14.11C12.17 14.26 11.98 14.33 11.79 14.33C11.6 14.33 11.4 14.26 11.26 14.11L9.5 12.35C9.2 12.06 9.2 11.58 9.5 11.29C9.79 11 10.27 11 10.56 11.29L11.79 12.52L14.78 9.53C15.07 9.24 15.54 9.24 15.84 9.53C16.13 9.82 16.13 10.3 15.84 10.59Z"
                                                            fill="#12B76A"></path>
                                                    </svg></div>Hoàn tiền giữ chỗ 70%
                                            </div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM15.84 10.59L12.32 14.11C12.17 14.26 11.98 14.33 11.79 14.33C11.6 14.33 11.4 14.26 11.26 14.11L9.5 12.35C9.2 12.06 9.2 11.58 9.5 11.29C9.79 11 10.27 11 10.56 11.29L11.79 12.52L14.78 9.53C15.07 9.24 15.54 9.24 15.84 9.53C16.13 9.82 16.13 10.3 15.84 10.59Z"
                                                            fill="#12B76A"></path>
                                                    </svg></div>Đền tiền 30%<span>(Đánh giá hệ thống 3*)</span>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="column__item case">Trong vòng 7 ngày trước chuyến đi</div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM14.67 13.39C14.97 13.69 14.96 14.16 14.67 14.45C14.52 14.59 14.33 14.67 14.14 14.67C13.95 14.67 13.75 14.59 13.61 14.44L12.25 13.07L10.9 14.44C10.75 14.59 10.56 14.67 10.36 14.67C10.17 14.67 9.98 14.59 9.84 14.45C9.54 14.16 9.53999 13.69 9.82999 13.39L11.2 12L9.82999 10.61C9.53999 10.31 9.54 9.84 9.84 9.55C10.13 9.26 10.61 9.26 10.9 9.56L12.25 10.93L13.61 9.56C13.9 9.26 14.37 9.26 14.67 9.55C14.96 9.84 14.97 10.31 14.67 10.61L13.3 12L14.67 13.39Z"
                                                            fill="#F04438"></path>
                                                    </svg></div>Không hoàn tiền
                                            </div>
                                            <div class="column__item">
                                                <div class="wrap-svg"><svg width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.25 2C6.74 2 2.25 6.49 2.25 12C2.25 17.51 6.74 22 12.25 22C17.76 22 22.25 17.51 22.25 12C22.25 6.49 17.76 2 12.25 2ZM14.67 13.39C14.97 13.69 14.96 14.16 14.67 14.45C14.52 14.59 14.33 14.67 14.14 14.67C13.95 14.67 13.75 14.59 13.61 14.44L12.25 13.07L10.9 14.44C10.75 14.59 10.56 14.67 10.36 14.67C10.17 14.67 9.98 14.59 9.84 14.45C9.54 14.16 9.53999 13.69 9.82999 13.39L11.2 12L9.82999 10.61C9.53999 10.31 9.54 9.84 9.84 9.55C10.13 9.26 10.61 9.26 10.9 9.56L12.25 10.93L13.61 9.56C13.9 9.26 14.37 9.26 14.67 9.55C14.96 9.84 14.97 10.31 14.67 10.61L13.3 12L14.67 13.39Z"
                                                            fill="#F04438"></path>
                                                    </svg></div>Đền tiền 100%<span>(Đánh giá hệ thống 2*)</span>
                                            </div>
                                        </div>
                                        <div class="desc-note">
                                            <p>* Khách thuê không nhận xe sẽ không được hoàn tiền giữ chỗ</p>
                                            <p>* Chủ xe không giao xe sẽ hoàn &amp; đền 100% tiền giữ chỗ cho bạn</p>
                                            <p class="df-align-center">* Tiền giữ chỗ &amp; bồi thường cho chủ xe hủy
                                                chuyến (nếu có) sẽ được Vietcar hoàn trả đến bạn bằng chuyển khoản ngân hàng
                                                trong vòng 1-3 ngày làm việc.<span class="tooltip tooltip--m "><span
                                                        class="wrap-svg"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001"
                                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M12 17H12.01" stroke="black" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></span><span class="tooltip-text"><b>Thủ tục hoàn tiền &amp;
                                                            đền cọc</b>Vietcar sẽ hoàn lại tiền cọc (&amp; tiền đền cọc do
                                                        chủ
                                                        xe hủy chuyến (nếu có) theo chính sách hủy chuyến) qua tài khoản
                                                        ngân hàng của khách thuê trong vòng 1-3 ngày làm việc kể từ thời
                                                        điểm hủy chuyến.<i>*Nhân viên Vietcar sẽ liên hệ khách thuê (qua số
                                                            điện thoại đã đăng ký trên Vietcar) để xin thông tin tài khoản
                                                            ngân hàng, hoặc Khách thuê có thể chủ động gửi thông tin cho
                                                            Vietcar qua email Contact@Vietcar.vn hoặc nhắn tin tại Vietcar
                                                            Fanpage</i></span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-page"></div>
                                {{-- Comment --}}
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>


    <div class="modal fade" id="js_modal_xac_nhan" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="modalXacNhan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalXacNhan">Xác nhận thuê xe<span class="js_ten_xe"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <style>
                        .modal-body .row {
                            display: block
                        }

                        .modal-body .row .col-6.my-2 {
                            float: right;
                        }
                    </style>
                    <div class="modal-body" style="padding: 1.5rem 3rem">
                        <div class="row">
                            <div class="" style="float: left">
                                <div><strong class="main-img_md"></strong></div>
                            </div>
                            <div class="col-6 my-2">
                                <div>Tên xe: <strong class="js_ten_xe_md"></strong></div>
                            </div>

                            <div class="col-6 my-2">
                                <div>Biển số: <strong class="js_bien_so_md"></strong></div>
                            </div>
                            <div class="col-6 my-2">
                                <div>Ngày nhận xe: <strong class="js_ngay_nhan_xe_md"></strong></div>
                            </div>
                            <div class="col-6 my-2">
                                <div>Ngày trả xe: <strong class="js_ngay_tra_xe_md"></strong></div>
                            </div>
                            <div class="col-6 my-2">
                                <div>Đơn giá: <strong class="js_don_gia_md"></strong></div>
                            </div>
                            <div class="col-6 my-2">
                                <div>Số ngày: <strong class="js_so_ngay_thue_md"></strong></div>
                            </div>
                            <div style="clear: both"></div>
                            <div class="col-12 my-2 mt-3 px-1">
                                <div class="alert alert-info mb-1" role="alert">
                                    <div>Thành tiền <strong class="js_thanh_tien_md"></strong></div>

                                </div>
                                <p>Thanh toán dễ dàng, lần đầu vào ngày nhận xe</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex flex-row justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fas fa-times"></i> Hủy</button>
                        <button type="button" class="btn btn-success js_btn_xac_nhan"><i
                                class="fas fa-check-circle"></i> Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="js_modal_thong_bao_success" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="alert alert-success alert-dismissible m-0" role="alert">
                    <strong>Bạn đã đặt thành công!</strong> Vui lòng chờ quản trị viên xác nhận. Cảm ơn!
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="js_modal_thong_bao_error" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger alert-dismissible m-0" role="alert">
                    <strong>Lỗi!</strong> Có một vài lỗi, xin hãy thử lại!
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    </div><br>
    <section class="review" id="review">
        <div class="m-container-thin">
            @if (auth()->check())
                @if (session('thongbao'))
                    {{ session('thongbao') }}
                @endif
                <h3>Đánh giá...</h3>
                <form action="{{ route('comments', ['id' => $xe->idxe]) }}" method="post" role="form">
                    @csrf
                    <div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="iduser" value="{{ auth()->id() }}" />
                        <input type="hidden" name="idxe" value="{{ $xe->idxe }}" />

                        <textarea name="mota" id="comment" cols="3" rows="3" placeholder="Nội dung phản hồi..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            @else
                <div class="alert alert-danger" role="alert">
                    <strong>Đăng nhập để đánh giá</strong> <a href="{{ route('pages.dangnhap') }}"
                        style="color: #5fcf86;">
                        Đăng nhập</a>
                </div>
            @endif
            @foreach ($comments as $comment)
                <div class="box1">
                    <div class="info">
                        @if ($comment->user)
                            <!-- Check if user exists -->
                            <h6>{{ $comment->user->hoten }}</h6>
                        @else
                            <h6>Unknown User</h6> <!-- Or any default message -->
                        @endif
                        <div class="comment-desc">
                            <pre>{{ $comment->mota }}</pre><br>
                            <i>{{ $comment->created_at->diffForHumans() }}</i>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Display existing comments if any -->

    </section>
@endsection

@push('script')
    <script>
        // Lấy các phần tử cần thiết
        var ngayNhanXeInput = document.getElementById('ngayNhanXe');
        var ngayTraXeInput = document.getElementById('ngayTraXe');
        var soNgayThueElement = document.querySelector('.js_so_ngay_thue');
        var donGiaElement = document.querySelector('.js_don_gia');
        var thanhTienElement = document.querySelector('.js_thanh_tien');

        // Hàm lắng nghe sự kiện thay đổi của cả hai input ngày nhận xe và ngày trả xe
        ngayNhanXeInput.addEventListener('change', function() {
            updateSoNgayThueAndThanhTien();
        });

        ngayTraXeInput.addEventListener('change', function() {
            updateSoNgayThueAndThanhTien();
        });

        // Hàm cập nhật số ngày thuê và tổng tiền
        function updateSoNgayThueAndThanhTien() {
            var ngayNhanXe = new Date(ngayNhanXeInput.value);
            var ngayTraXe = new Date(ngayTraXeInput.value);

            // Kiểm tra xem cả hai ngày nhận xe và ngày trả xe đã được chọn
            if (ngayNhanXeInput.value && ngayTraXeInput.value) {
                // Kiểm tra nếu ngày trả xe trước ngày nhận xe
                if (ngayTraXe < ngayNhanXe) {
                    alert('Ngày trả xe không thể trước ngày nhận xe. Vui lòng chọn lại.');
                    ngayTraXeInput.value = ''; // Xoá giá trị ngày trả xe
                    soNgayThueElement.textContent = 'Không hợp lệ';
                    thanhTienElement.textContent = 'Không hợp lệ';
                    return; // Thoát khỏi hàm để không tiếp tục tính toán
                } else {
                    var soNgayThue = Math.ceil((ngayTraXe - ngayNhanXe) / (1000 * 3600 * 24)); // Tính số ngày thuê
                    soNgayThueElement.textContent = soNgayThue; // Hiển thị số ngày thuê
                    updateThanhTien(); // Cập nhật tổng tiền
                }
            }
        }

        // Hàm kiểm tra ngày trả xe
        function validateNgayTraXe() {
            var ngayNhanXe = new Date(ngayNhanXeInput.value);
            var ngayTraXe = new Date(ngayTraXeInput.value);

            if (ngayTraXe < ngayNhanXe) {
                alert('Ngày trả xe không thể trước ngày nhận xe. Vui lòng chọn lại.');
                ngayTraXeInput.value = ''; // Xóa giá trị ngày trả xe
                soNgayThueElement.textContent = ''; // Xóa số ngày thuê
                updateThanhTien(); // Cập nhật tổng tiền
            } else {
                updateSoNgayThue();
            }
        }

        // Hàm cập nhật tổng tiền
        function updateThanhTien() {
            var soNgayThue = parseInt(soNgayThueElement.textContent); // Lấy số ngày thuê
            var donGia = parseInt(donGiaElement.textContent.replace(/\D/g, '')); // Lấy đơn giá/ngày

            // Kiểm tra nếu số ngày thuê không phải là một số hợp lệ (NaN), thì không cập nhật tổng tiền
            if (!isNaN(soNgayThue)) {
                var thanhTien = soNgayThue * donGia; // Tính tổng tiền
                thanhTienElement.textContent = thanhTien.toLocaleString() + ' đồng'; // Hiển thị tổng tiền
            }
        }
    </script>

    {{-- <script>
        var des = document.querySelector('.des').innerText.toString();
        var afterDes = des.replace(/\r\n/g, "<br>")
        console.log(afterDes)
    </script> --}}

    {{-- <script>
        var des = document.querySelector('.des')
        var text = "<?php echo "$xe->mieuta"; ?>";
        var replacedText = text.replace(/\r\n/g, "<br>");
        des.innerHTML = replacedText;

        console.log(replacedText);
    </script> --}}





    <script>
        $(document).ready(function() {
            let dateNhan, dateTra, days, thanhTien;

            function toggleDatXeButton() {
                let ngayNhanXe = $('.js_ngay_nhan_xe').val();
                let ngayTraXe = $('.js_ngay_tra_xe').val();

                if (ngayNhanXe && ngayTraXe) {
                    $('.js_btn_dat_xe').prop('disabled', false);
                } else {
                    $('.js_btn_dat_xe').prop('disabled', true);
                }
            }

            $('.js_ngay_nhan_xe, .js_ngay_tra_xe').change(function() {
                toggleDatXeButton();
            });

            toggleDatXeButton();


            $('.js_btn_dat_xe').click(function(e) {
                e.preventDefault();

                // Kiểm tra xem ngày nhận xe và ngày trả xe có được chọn chưa
                let ngayNhanXe = $('.js_ngay_nhan_xe').val();
                let ngayTraXe = $('.js_ngay_tra_xe').val();

                if (!ngayNhanXe || !ngayTraXe) {
                    alert("Vui lòng chọn ngày nhận xe và ngày trả xe trước khi chọn thuê.");
                    return; // Ngăn chặn việc mở modal xác nhận nếu ngày chưa được chọn
                }

                let tenXe = $('.js_ten_xe').html();
                let hinhXe = $('.main-img').html();
                let bienSo = $('.js_bien_so').html();
                let donGia = $('.js_don_gia').text();
                let days = $('.js_so_ngay_thue').text();
                let thanhTien = $('.js_thanh_tien').text();

                $('.js_ten_xe_md').html(tenXe);
                $('.main-img_md').html(hinhXe);
                $('.main-img_md img').css({
                    'width': '20rem',
                    'height': 'auto',
                });

                $('.js_bien_so_md').html(bienSo);
                $('.js_ngay_nhan_xe_md').html(ngayNhanXe);
                $('.js_ngay_tra_xe_md').html(ngayTraXe);
                $('.js_don_gia_md').html(donGia);
                $('.js_so_ngay_thue_md').html(days);
                $('.js_thanh_tien_md').html(thanhTien);

                $('#js_modal_xac_nhan').modal('show');
            });

            $('.js_btn_xac_nhan').click(function(e) {
                e.preventDefault();
                const data = {
                    'ten_xe': $('.js_ten_xe').text(),
                    'bien_so': $('.js_bien_so').text().replace(/[.-\s]/g, ''),
                    'ngay_nhan_xe': $('.js_ngay_nhan_xe').val(),
                    'ngay_tra_xe': $('.js_ngay_tra_xe').val(),
                    'thanh_tien': $('.js_thanh_tien').text().replace(/[^0-9]/g, ''),
                    'id_xe': {{ $xe->idxe }},
                };

                console.log(data);

                $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "post",
                        url: "xac-nhan-dat-xe",
                        data: {
                            id_xe: data.id_xe,
                            ngay_nhan_xe: data.ngay_nhan_xe,
                            ngay_tra_xe: data.ngay_tra_xe,
                            thanh_tien: data.thanh_tien,
                        },
                        success: function(response) {
                            if (!response.error) {
                                $('#js_modal_xac_nhan').modal('hide');
                                $('#js_modal_thong_bao_success').modal('show');
                            } else {
                                $('#js_modal_xac_nhan').modal('hide');
                                $('#js_modal_thong_bao_error').modal('show');
                            }
                        }
                    })
                    .done(function() {})
                    .fail(function() {
                        $('#js_modal_xac_nhan').modal('hide');
                        $('#js_modal_thong_bao_success').modal('show');
                    })
            });
        });
    </script>
@endpush
