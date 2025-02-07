<div class="mobile-menu-toggle">
    <button id="mobile-nav-toggle" class="btn btn-primary">
        <i class="fas fa-bars"></i>
    </button>
</div>

<div class="admin-nav-container sticky-top">
    <nav class="admin-nav">
        <ul class="nav-menu">
            <li>
                <a href="{{ route('admin.thongke') }}" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    <span>Thống kê</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Quản lý khách hàng</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" style="cursor: default">
                    <i class="fas fa-car"></i>
                    <span>Quản lý xe</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('xe.index') }}">Quản lý xe</a></li>
                    <li><a href="{{ route('dongxe.index') }}">Quản lý dòng xe</a></li>
                    <li><a href="{{ route('hangxe.index') }}">Quản lý hãng xe</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('giaodich.index') }}" class="nav-link">
                    <i class="fas fa-exchange-alt"></i>
                    <span>Quản lý giao dịch</span>
                </a>
            </li>
            <li>
                <a href="{{ route('hoadon.index') }}" class="nav-link">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Quản lý hoá đơn</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<style>
    .admin-nav-container {
        width: 250px;
        height: 100vh;
        background-color: #f8f9fa;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        top: 0;
        transition: width 0.3s ease;
        z-index: 1000;
    }

    .admin-nav {
        padding: 20px 0;
    }

    .nav-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-menu>li {
        margin-bottom: 10px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
        border-radius: 5px;
    }

    .nav-link i {
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    .nav-link:hover {
        background-color: #e9ecef;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-toggle::after {
        content: '\f107';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        margin-left: auto;
    }

    .dropdown-menu {
        display: none;
        list-style: none;
        padding: 0;
        background-color: #f1f3f5;
        border-radius: 5px;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu li a {
        display: block;
        padding: 10px 20px 10px 40px;
        color: #333;
        text-decoration: none;
    }

    .dropdown-menu li a:hover {
        background-color: #e9ecef;
    }

    /* Mặc định ẩn toggle button ở đây (nếu cần) */
    .mobile-menu-toggle {
        position: fixed;
        top: 80px;
        left: 10px;
        z-index: 1100;
    }

    /* Áp dụng responsive cho khoảng kích thước mong muốn */
    @media (max-width: 1200px) {
        .admin-nav-container {
            width: 0;
            overflow: hidden;
        }
        .admin-nav-container.active {
            width: 60px;
            position: fixed;
            top: 140px
        }
        .admin-nav-container.active .nav-link span {
            display: none;
        }
        .admin-nav-container.active .nav-link {
            padding: 10px 0;
            justify-content: center;
        }
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mobile-nav-toggle').click(function() {
            $('.admin-nav-container').toggleClass('active');
        });
    });
</script>
