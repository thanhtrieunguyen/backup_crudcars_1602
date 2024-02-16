
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow border-0">
    <div class="container">
        <a class="navbar-brand" href="/" ><img style="width: 100px; border-radius: 10px;" src="/upload/slides/logo.png" alt=""></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form action="tim-kiem" class="form-inline my- my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm xe..." aria-label="Search" name="q">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-1">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
            <li class="nav-item ml-2">
                    <a class="nav-link" href="/gioi-thieu">Về VietCar</a>
                </li>
                
                <li class="nav-item ml-2">
                    <a class="nav-link" href="/thue-xe">Thuê xe</a>
                </li>
              
                    <a class="nav-link" href="/lien-he">Liên hệ</a>
                </li>

                <!-- </li>
              
                    <a class="nav-link" href="/blo-g">Blog</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth

                    @can('is_admin')
                        <li class="nav-item mr-2">
                            <a class="nav-link" href="/admin/thong-ke">Quản trị</a>
                        </li>
                    @endcan

                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/trang-ca-nhan">{{ auth()->user()->ho_ten }}</a>
                    </li>
                    <li class="nav-item ml-2">
                        <form action="{{ route('auth.dang-xuat') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-white">Đăng xuất</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/dang-nhap">Đăng nhập</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="/dang-ky">Đăng ký</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>