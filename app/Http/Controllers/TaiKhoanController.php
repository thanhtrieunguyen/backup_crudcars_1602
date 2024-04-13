<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Validator;
use Hash;
use App\Models\User;
use App\Models\GiaoDich;
use Illuminate\Database\QueryException;

class TaiKhoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $khachHangs = User::with('giaodich')->where('idrole', 2)->with('role')->latest()->withCount('giaodich')->get();
        return view('admin.khachhang.index', compact('khachHangs'));

    }

    public function create()
    {
        return view('admin.khachhang.create');
    }
    public function store(UserCreateRequest $request)
    {
        $passwordDefault = 123456;

        $khachHang = User::create([
            'email' => $request->email,
            'password' => Hash::make($passwordDefault),
            'hoten' => $request->hoten,
            'cccd' => $request->cccd,
            'ngaysinh' => $request->ngaysinh,
            'sdt' => $request->sdt,
            'diachi' => $request->diachi,
            'idrole' => 2,
        ]);

        return back()->with(['thong-bao' => 'Thêm khách hàng ' . $khachHang->hoten . ' thành công!', 'type' => 'success']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $khachHang = User::findOrFail($id);
        return view('admin.khachhang.edit', compact('khachHang'));
    }

    public function update(UserUpdateRequest $request, $id)
    {

        $khachHang = User::findOrFail($id);

        if ($request->cccd != null) {
            $cccdnew = $request->cccd;
        } else {
            $cccdnew = $khachHang->cccd;
        }

        $khachHang->update([
            'hoten' => $request->hoten,
            'ngaysinh' => $request->ngaysinh,
            'sdt' => $request->sdt,
            'cccd' => $cccdnew,
            'diachi' => $request->diachi
        ]);

        return redirect('admin/user')->with(['thong-bao' => 'Cập nhật khách hàng ' . $khachHang->hoten . ' thành công!', 'type' => 'success']);
    }

    public function destroy($id)
    {
        try {
            $khachHang = User::findOrFail($id);
            $khachHang->delete();
            
            return back()->with(['thong-bao' => 'Xóa khách hàng ' . $khachHang->hoten . ' thành công!', 'type' => 'success']);
        } catch (QueryException $e) {
            return back()->with(['thong-bao' => 'Không thể xóa khách hàng này do khách hàng này đã có giao dịch trong hệ thống. Để xoá, yêu cầu xoá các giao dịch liên quan đến khách hàng sau đó mới có thể xoá khách hàng.', 'type' => 'danger']);
        }
    }

    public function getCCCD(Request $request): JsonResponse
    {
        $data = User::select("cccd")
            ->where('cccd', 'LIKE', '%' . $request->get('query') . '%')
            ->get();

        return response()->json($data);
    }


}
