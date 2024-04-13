@extends('layouts.index')

<head>
    <title>Thuê xe</title>
    <link rel="icon" type="image/x-icon" href="upload/slides/car.png">
    <link rel="stylesheet" href="css/customize1.css">
</head>
@section('content')
    <div class="filter-section fixed">
        <div class="m-container">
            <div class="filter-container">
                <form action="{{ route('filter') }}" method="GET">
                    <div class="filter-dropdown">
                        <div class="list-dropdown">
                            <div
                                class="swiper swiper-list-filter swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active" style="margin-right: 10px;">
                                        <div class="item-dropdown">
                                            <div class="item-dropdown__wrap">
                                                <div class="wrap-svg"><i class="ti-car"></i></div>
                                                <select id="brandSelect" name="dongxe">
                                                    <option selected value="None"> Dòng xe</option>
                                                    @foreach ($dongXes as $dongXe)
                                                        <option value="{{ $dongXe->iddongxe }}">{{ $dongXe->tendongxe }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="margin-right: 10px;">
                                        <div class="item-dropdown">
                                            <div class="item-dropdown__wrap">
                                                <div class="wrap-svg"><i class="ti-world"></i></div>
                                                <select id="typeSelect" name="hangxe">
                                                    <option selected value="None"> Hãng xe</option>
                                                    @foreach ($hangXes as $hangXe)
                                                        <option value="{{ $hangXe->idhangxe }}">{{ $hangXe->tenhangxe }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn" style="background-color: rgb(255, 255, 255);">
                            <div class="wrap-svg"><i class="ti-filter"></i></div>Bộ lọc
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="m-container" style="margin-top: 100px;">

        <div class="wrapper">
            <ul class="product">
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
                                    @if ($xe->nhienlieu == 'Xăng')
                                        <span class="tag-item non-mortgage">{{ $xe->nhienlieu }}</span>
                                    @elseif ($xe->nhienlieu == 'Dầu diesel')
                                        <span class="tag-item non-mortgage-oil">{{ $xe->nhienlieu }}</span>
                                    @else
                                        <span class="tag-item non-mortgage-elec">{{ $xe->nhienlieu }}</span>
                                    @endif
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
            </ul>
            {!! $xes->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection
