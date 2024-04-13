<div class="sticky-top" style="top: 60px">
    <ul class="nav justify-content-center bg-white rounded-lg shadow py-2">
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.thongke') }}">Thống kê</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('user.index') }}">Quản lý khách hàng</a>
        </li>
        <li class="nav-item">
            <ul class="nav nav-tabs">
                <li style="list-style: none">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Quản lý xe</a>
                    <div class="dropdown-menu">
                        <a class="nav-item dropdown-item text-dark" href="{{ route('xe.index') }}">Quản
                            lý xe</a>
                        <a class="nav-item dropdown-item text-dark" href="{{ route('dongxe.index') }}">Quản
                            lý dòng xe</a>
                        <a class="nav-item dropdown-item text-dark" href="{{ route('hangxe.index') }}">Quản
                            lý hãng xe</a>
                    </div>
                </li>
            </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('giaodich.index') }}">Quản lý giao dịch</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('hoadon.index') }}">Quản lý hoá đơn</a>
        </li>
    </ul>
</div>
