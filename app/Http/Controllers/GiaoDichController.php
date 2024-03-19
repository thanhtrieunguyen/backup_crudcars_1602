<?php

namespace App\Http\Controllers;

use App\Models\GiaoDich;
use App\Models\HoaDon;
use App\Models\User;
use App\Models\Xe;
use Illuminate\Http\Request;

class GiaoDichController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $giaoDichs = GiaoDich::with('user', 'xe')->orderBy('tinhtranggiaodich', 'asc')->latest()->get();

        return view('admin.giaodich.index', compact('giaoDichs'));
    }

    public function create()
    {
        return view('admin.giaodich.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu được gửi từ form
        $request->validate([
            // Thêm các quy tắc validation tại đây
        ]);
        $idUser = User::select('iduser')->where('cccd', '=', $request->cccd)->first()->iduser;
        $idXe = Xe::select('idxe')->where('bienso', '=', $request->bienso)->first()->idxe;
        // Tạo giao dịch mới trong cơ sở dữ liệu
        $giaodich = new GiaoDich([
            'iduser' => $idUser,
            'idxe' => $idXe,
            'phidv' => $request->get('phidv'),
            'tongtien' => $request->get('tongtien'),
            'ngaynhanxe' => $request->get('ngaynhanxe'),
            'ngaytraxe' => $request->get('ngaytraxe'),
        ]);

        // Lưu giao dịch vào cơ sở dữ liệu
        $giaodich->save();

        // Chuyển hướng đến trang danh sách giao dịch sau khi thêm thành công
        return redirect()->route('giaodich.index')->with('success', 'Giao dịch đã được thêm thành công.');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $giaoDich = GiaoDich::where('id', $id)->firstOrFail();
        $giaoDich->delete();

        return back()->with(['thong-bao' => 'Xóa thành công giao dịch!', 'type' => 'success']);
    }
}
