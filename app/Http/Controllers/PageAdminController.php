<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Xe;
use App\Models\GiaoDich;
use DB;
use Carbon\Carbon;

class PageAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getThongKe()
    {
        $totalKhachHang = User::where('idrole', 2)->count();
        $totalXe = Xe::count();
        $totalMoney = DB::table('hoadon')
            ->where('tinhtranghoadon', 1)
            ->select(DB::raw('SUM(tongtien) as total_money'))
            ->get();

        $topXes = DB::table('xe')
            ->join('giaodich', 'giaodich.idxe', '=', 'xe.idxe')
            ->select('xe.idxe', 'xe.tenxe', DB::raw('COUNT(*) as times'))
            ->where('giaodich.tinhtranggiaodich', 1)
            ->groupBy('xe.idxe', 'xe.tenxe')
            ->orderBy('times', 'desc')
            ->take(5)
            ->get();



        $today = Carbon::now()->toDateString();
        $startOfDay = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' 00:00:00');
        $endOfDay = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' 23:59:59');

        $giaoDichTodays = GiaoDich::with('user', 'xe')
            ->where('tinhtranggiaodich', 1)
            ->whereBetween('created_at', [$startOfDay, $endOfDay])
            ->latest()
            ->get();



        return view('admin.thongke', compact('totalKhachHang', 'totalXe', 'totalMoney', 'topXes', 'giaoDichTodays'));
    }
}
