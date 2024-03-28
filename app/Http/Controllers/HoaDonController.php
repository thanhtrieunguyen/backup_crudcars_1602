<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;
use Exception;

class HoaDonController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $hoaDons = HoaDon::with('giaodich', 'user', 'xe')->orderBy('tinhtranghoadon', 'asc')->latest()->get();

        return view('admin.hoadon.index', compact('hoaDons'));
    }

    public function create()
    {
        return abort(404);
    }
    public function store()
    {
        return abort(404);
    }
    public function edit()
    {
        return abort(404);
    }
    public function update()
    {
        return abort(404);
    }

    public function destroy($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $giaoDich = $hoaDon->giaodich;
        $hoaDon->delete();

        if ($giaoDich) {
            $giaoDich->update(['tinhtranggiaodich' => 0]);
        }
        return back()->with(['thong-bao' => 'Xóa thành công hoá đơn!', 'type' => 'success']);
    }

    public function updateTinhTrang(Request $request)
    {
        try {
            $hoaDon = HoaDon::where('idhoadon', $request->idhoadon)->firstOrFail();
            $hoaDon->update(['tinhtranghoadon' => $request->tinhtranghoadon]);

            return response()->json([
                'error' => false
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }
}
