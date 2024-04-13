<nav class="navbar navbar-expand-lg navbar-dark fixed-top border-0">
    <div class="container">
        <a class="navbar-brand" href="/"><img style="width: 100px; border-radius: 10px;" src="/upload/slides/logo.png"
                alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
            aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form action="{{ route('pages.timkiem') }}" class="form-inline my- my-lg-0">
                <input class="form-control mr-sm-2" style="width: 200px;" type="search" placeholder="Tìm kiếm xe..."
                    aria-label="Search" name="q" id="search" value="{{ old('search') }}">
                <button class="btn btn-success my-2 my-sm-0" style="width: 100px;" type="submit">Tìm kiếm</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-1">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="{{ route('pages.about') }}">Về VietCar</a>
                </li>

                <li class="nav-item ml-2">
                    <a class="nav-link" href="{{ route('pages.thuexe') }}">Thuê xe</a>
                </li>

                <a class="nav-link" href="{{ route('pages.contact') }}">Liên hệ</a>
                </li>

                <!-- </li>
                    <a class="nav-link" href="/blo-g">Blog</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth

                    @can('is_admin')
                        <li class="nav-item mr-2">
                            <a class="nav-link" href="{{ route('admin.thongke') }}">Quản trị</a>
                        </li>
                    @endcan

                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/trangcanhan">{{ auth()->user()->hoten }}</a>
                    </li>
                    <li class="nav-item ml-2">
                        <form action="{{ route('auth.dangxuat') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Đăng xuất</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="{{ route('pages.dangnhap') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="{{ route('pages.dangky') }}">Đăng ký</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
