<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'unique:users|min:3|max:255',
                'hoten' => 'min:3|max:255',
                'cccd' => 'unique:users|min:12|max:12',
                'sdt' => 'min:3|max:10',
                'diachi' => 'min:3|max:255',
            ],
            [
                'email.unique' => 'Email này đã có người sử dụng',
                'email.min' => 'Email ít nhất :min ký tự',
                'email.max' => 'Email nhiều nhất :max ký tự',
                'hoten.min' => 'Họ tên ít nhất :min ký tự',
                'hoten.max' => 'Họ tên nhiều nhất :max ký tự',
                'cccd.unique' => 'CCCD này đã tồn tại',
                'cccd.min' => 'CCCD ít nhất :min ký tự',
                'cccd.max' => 'CCCD nhiều nhất :max ký tự',
                'sdt.min' => 'Số điện thoại ít nhất :min ký tự',
                'sdt.max' => 'Số điện thoại nhiều nhất :max ký tự',
                'diachi.min' => 'Địa chỉ ít nhất :min ký tự',
                'diachi.max' => 'Địa chỉ nhiều nhất :max ký tự',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()->with(['error_register' => 'Loi dang ky']);
        }


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

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'hoten' => 'min:3|max:255',
                'cccd' => 'unique:users|min:12|max:12',
                'sdt' => 'min:3|max:10',
                'diachi' => 'min:3|max:255',
            ],
            [
                'hoten.min' => 'Họ tên ít nhất :min ký tự',
                'hoten.max' => 'Họ tên nhiều nhất :max ký tự',
                'cccd.unique' => 'CCCD này đã tồn tại',
                'cccd.min' => 'CCCD ít nhất :min ký tự',
                'cccd.max' => 'CCCD nhiều nhất :max ký tự',
                'sdt.min' => 'Số điện thoại ít nhất :min ký tự',
                'sdt.max' => 'Số điện thoại nhiều nhất :max ký tự',
                'diachi.min' => 'Địa chỉ ít nhất :min ký tự',
                'diachi.max' => 'Địa chỉ nhiều nhất :max ký tự',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()->with(['error_register' => 'Loi dang ky']);
        }

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
