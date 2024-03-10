<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Validator;
use Hash;
use App\Models\User;

class TaiKhoanController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        $khachHangs = User::where('idrole', 2)->with('role')->latest()->get();
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
        $khachHang = User::findOrFail($id);
        $khachHang->delete();

        return back()->with(['thong-bao' => 'Xóa khách hàng ' . $khachHang->hoten . ' thành công!', 'type' => 'success']);
    }


}
