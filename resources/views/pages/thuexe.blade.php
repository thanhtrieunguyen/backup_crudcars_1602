@extends('layouts.index')

<head>
    <title>Thuê xe</title>
    <link rel="icon" type="image/x-icon" href="upload/slides/car.png">
    <style>
        .advanced-filter {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .filter-item {
            display: flex;
            flex-direction: column;
        }

        .filter-item label {
            margin-bottom: 8px;
            font-weight: 600;
        }

        .filter-submit {
            background-color: #5fcf86;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-submit:hover {
            background-color: #4ab36f;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .price-range input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>

@section('content')
    <div class="advanced-filter">
        <form action="{{ route('filter') }}" method="GET">
            <div class="filter-grid">
                <div class="filter-item">
                    <label>Dòng xe</label>
                    <select name="dongxe" class="form-control">
                        <option value="">Tất cả dòng xe</option>
                        @foreach ($dongXes as $dongXe)
                            <option value="{{ $dongXe->iddongxe }}">{{ $dongXe->tendongxe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="filter-item">
                    <label>Hãng xe</label>
                    <select name="hangxe" class="form-control">
                        <option value="">Tất cả hãng xe</option>
                        @foreach ($hangXes as $hangXe)
                            <option value="{{ $hangXe->idhangxe }}">{{ $hangXe->tenhangxe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="filter-item">
                    <label>Nhiên liệu</label>
                    <select name="nhienlieu" class="form-control">
                        <option value="">Loại nhiên liệu</option>
                        <option value="Xăng">Xăng</option>
                        <option value="Dầu diesel">Dầu diesel</option>
                        <option value="Điện">Điện</option>
                    </select>
                </div>

                <div class="filter-item">
                    <label>Khoảng giá (nghìn đồng/ngày)</label>
                    <div id="price-slider"></div>
                    <div class="price-display" style="margin-top:5px;">
                        <span id="min-price-display"></span> - <span id="max-price-display"></span>
                    </div>
                    <input type="hidden" name="min_price" id="min_price">
                    <input type="hidden" name="max_price" id="max_price">
                </div>
            </div>

            <button type="submit" class="filter-submit mt-3">Áp dụng bộ lọc</button>
        </form>
    </div>


    <div class="m-container" style="margin-top: 100px;">

        <div class="wrapper">
            <ul class="product">
                @foreach ($xes as $xe)
                    @php
                        $array = json_decode($xe->hinhxe->hinhxe, true);
                        $img1 = $array[0] ?? './upload/images/default-image.jpg'; // Lấy ảnh đầu tiên hoặc dùng ảnh mặc định
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
                                        <img src="{{ $img1 }}" alt="{{ $xe->tenxe }}"
                                            style="width: 100%; height:190px" loading="lazy">
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

@section('script')
    @parent
    <!-- Thêm CSS và JS của noUiSlider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
    <script>
        const priceSlider = document.getElementById('price-slider');
        const minPriceInput = document.getElementById('min_price');
        const maxPriceInput = document.getElementById('max_price');
        const minPriceDisplay = document.getElementById('min-price-display');
        const maxPriceDisplay = document.getElementById('max-price-display');

        const startMin = {{ request('min_price') ?? 0 }};
        const startMax = {{ request('max_price') ?? 2000 }};

        noUiSlider.create(priceSlider, {
            start: [startMin, startMax],
            connect: true,
            range: {
                'min': 0,
                'max': 4000
            },
            tooltips: true,
            format: {
                to: function (value) {
                    return Math.round(value);
                },
                from: function (value) {
                    return Number(value);
                }
            }
        });

        priceSlider.noUiSlider.on('update', function(values, handle) {
            if (handle === 0) {
                minPriceDisplay.innerText = values[0] + 'K';
                minPriceInput.value = values[0];
            } else {
                maxPriceDisplay.innerText = values[1] + 'K';
                maxPriceInput.value = values[1];
            }
        });

        // Kiểm tra dữ liệu trước khi gửi form
        document.querySelector('form').addEventListener('submit', function(e) {
            const minPrice = parseInt(minPriceInput.value);
            const maxPrice = parseInt(maxPriceInput.value);
            if (minPrice && maxPrice && minPrice > maxPrice) {
                e.preventDefault();
                alert('Giá tối thiểu phải nhỏ hơn giá tối đa');
            }
        });
    </script>
@endsection
