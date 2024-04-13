<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Xe;
use DB;

class PageAdminController extends Controller
{
    public function getThongKe()
    {
        $totalKhachHang = User::where('idrole', 2)->count();
        $totalXe = Xe::count();
        $totalMoney = DB::table('chitiethoadon')
            ->where('tinhtrang', 1)
            ->select(DB::raw('SUM(tongtien) as total_money'))
            ->get();

        $topXes = DB::table('xe')
            ->join('hoadon', 'hoadon.idxe', '=', 'xe.idxe')
            ->join('chitiethoadon', 'chitiethoadon.idhoadon', '=', 'hoadon.idhoadon')
            ->select('xe.idxe', 'xe.tenxe', DB::raw('COUNT(*) as times'))
            ->where('chitiethoadon.tinhtrang', 1)
            ->groupBy('xe.idxe', 'xe.tenxe')
            ->orderBy('times', 'desc')
            ->take(5)
            ->get();

        $giaoDichTodays = HoaDon::with('user', 'xe')
            ->whereDate('created_at', date('Y-m-d'))
            ->latest()
            ->get();

        return view('admin.thongke', compact('totalKhachHang', 'totalXe', 'totalMoney', 'topXes', 'giaoDichTodays'));
    }
}
