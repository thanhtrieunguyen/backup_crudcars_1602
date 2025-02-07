<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Xe;
use App\Models\GiaoDich;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

        // Total revenue
        $totalMoney = HoaDon::where('tinhtranghoadon', 1)->sum('tongtien');

        // Top 5 most rented cars
        $topXes = Xe::withCount(['giaodich as times' => function ($query) {
            $query->where('tinhtranggiaodich', 1);
        }])
            ->orderBy('times', 'desc')
            ->take(5)
            ->get();

        // Today's transactions
        $today = Carbon::now()->toDateString();
        $startOfDay = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' 00:00:00');
        $endOfDay = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' 23:59:59');

        $giaoDichTodays = GiaoDich::with('user', 'xe')
            ->where('tinhtranggiaodich', 1)
            ->whereBetween('created_at', [$startOfDay, $endOfDay])
            ->latest()
            ->get();

        // Optional: Monthly revenue data
        $monthlyRevenue = HoaDon::where('tinhtranghoadon', 1)
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('SUM(tongtien) as total_revenue')
            )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('admin.thongke', compact(
            'totalKhachHang',
            'totalXe',
            'totalMoney',
            'topXes',
            'giaoDichTodays',
            'monthlyRevenue'
        ));
    }
}
