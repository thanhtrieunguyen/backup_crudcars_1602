<nav class="navbar navbar-expand-lg fixed-top" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img style="width: 100px; border-radius: 10px;" src="/upload/slides/logo.png" alt="VietCar Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation"
                style="border: none; padding: 8px;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form action="{{ route('pages.timkiem') }}" class="d-flex mx-3">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Tìm kiếm xe..."
                           name="q" id="search" value="{{ old('search') }}"
                           style="border-radius: 8px 0 0 8px; border: 1px solid #e2e8f0; margin: auto; padding-bottom: 6px; height: auto;">
                    <button class="btn btn-primary" type="submit"
                            style="border-radius: 0 8px 8px 0; border: none;">
                        <i class="fas fa-search"></i> Tìm
                    </button>
                </div>
            </form>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark hover-underline px-3" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark hover-underline px-3" href="{{ route('pages.about') }}">Về VietCar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark hover-underline px-3" href="{{ route('pages.thuexe') }}">Thuê xe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark hover-underline px-3" href="{{ route('pages.contact') }}">Liên hệ</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @auth
                    @can('is_admin')
                        <li class="nav-item">
                            <a class="nav-link text-dark hover-underline px-3" href="{{ route('admin.thongke') }}">Quản trị</a>
                        </li>
                    @endcan

                    <li class="nav-item">
                        <a class="nav-link text-dark hover-underline px-3" href="/trangcanhan">{{ auth()->user()->hoten }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('auth.dangxuat') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary ms-2"
                                    style="border-radius: 8px; transition: all 0.3s ease;">Đăng xuất</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-dark hover-underline px-3" href="{{ route('pages.dangnhap') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="{{ route('pages.dangky') }}"
                           style="border-radius: 8px; transition: all 0.3s ease;">Đăng ký</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar {
    transition: all 0.3s ease;
}

.hover-underline {
    position: relative;
    transition: color 0.3s ease;
}

.hover-underline:after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background-color: #4299e1;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.hover-underline:hover:after {
    width: 70%;
}

.navbar-toggler:focus {
    box-shadow: none;
}

@media (max-width: 991.98px) {
    .navbar-collapse {
        background: white;
        padding: 1rem;
        border-radius: 8px;
        margin-top: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
}
</style>
