<?php

namespace App\Http\Controllers;

use App\Http\Requests\DongXeCreateRequest;
use App\Http\Requests\DongXeUpdateRequest;
use Illuminate\Http\Request;
use App\Models\DongXe;

class DongXeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $dongXes = DongXe::latest()->get();
        return view('admin.dongxe.index', compact('dongXes'));
    }

    public function create()
    {
        return view('admin.dongxe.create');
    }

    public function store(DongXeCreateRequest $request)
    {
        $dongXe = DongXe::create(
            ['tendongxe' => $request->tendongxe]
        );
        return back()->with(['thong-bao' => 'Thêm dòng xe ' . $dongXe->tendongxe . ' thành công!', 'type' => 'success']);
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $dongXe = DongXe::findOrFail($id);
        return view('admin.dongxe.edit', compact('dongXe'));
    }

    public function update(DongXeUpdateRequest $request, $id)
    {
        $dongXe = DongXe::findOrFail($id);
        $dongXe->update([
            'tendongxe' => $request->tendongxe,
        ]);

        return redirect('admin/dongxe')->with(['thong-bao' => 'Cập nhật dòng xe ' . $dongXe->tendongxe . ' thành công!', 'type' => 'success']);
    }

    public function destroy($id)
    {
        $dongXe = DongXe::findOrFail($id);
        $dongXe->delete();
        return back()->with(['thong-bao' => 'Xóa dòng xe ' . $dongXe->tendongxe . ' thành công!', 'type' => 'success']);
    }


}
