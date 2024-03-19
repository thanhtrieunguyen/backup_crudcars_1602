<?php

namespace App\Http\Controllers;

use App\Http\Requests\HangXeCreateRequest;
use App\Http\Requests\HangXeUpdateRequest;
use Illuminate\Http\Request;
use App\Models\HangXe;

class HangXeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $hangXes = HangXe::latest()->get();
        return view('admin.hangxe.index', compact('hangXes'));
    }

    public function create()
    {
        return view('admin.hangxe.create');
    }

    public function store(HangXeCreateRequest $request)
    {
        $hangXe = HangXe::create(
            ['tenhangxe' => $request->tenhangxe]
        );
        return back()->with(['thong-bao' => 'Thêm hãng xe ' . $hangXe->tenhangxe . ' thành công!', 'type' => 'success']);
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $hangXe = HangXe::findOrFail($id);
        return view('admin.hangxe.edit', compact('hangXe'));
    }

    public function update(HangXeUpdateRequest $request, $id)
    {
        $hangXe = Hangxe::findOrFail($id);
        $hangXe->update([
            'tenhangxe' => $request->tenhangxe,
        ]);

        return redirect('admin/hangxe')->with(['thong-bao' => 'Cập nhật hãng xe ' . $hangXe->tenhangxe . ' thành công!', 'type' => 'success']);
    }

    public function destroy($id)
    {
        $hangXe = HangXe::findOrFail($id);
        $hangXe->delete();
        return back()->with(['thong-bao' => 'Xóa hãng xe ' . $hangXe->tenhangxe . ' thành công!', 'type' => 'success']);
    }
}
