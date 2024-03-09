<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

// IMAGE==========
// ===============
use Illuminate\Http\Request;
use App\Models\Xe;
use App\Models\DongXe;
use App\Models\HangXe;
use App\Models\HinhXe;
use App\Models\Comment;

class XeController extends Controller
{
    public function __construct()
    {
        function convertToEscapedNewlines($text)
        {
            return str_replace("\n", '\n', $text);
        }
    }

    public function index()
    {
        $xes = Xe::with('dongXe', 'hangXe', 'hinhXe')
            ->latest()
            ->paginate(15);
        return view('admin.xe.index', compact('xes'));
    }

    public function create()
    {
        $dongXe = DongXe::all();
        $hangXe = HangXe::all();
        return view('admin.xe.create', compact('dongXe', 'hangXe'));
    }

    public function store(StoreRequest $request)
    {

        // $string1 = '["https:\/\/res.cloudinary.com\/dr3b2kgb1\/image\/upload\/v1707563147\/f3wwo5kxddbtqgnhjpbv.png"]';
        // $array = json_decode($string1, true);

        $hinhXes = [];
        foreach ($request->file('hinhxe') as $hinh) {

            $uploadedFileUrl = cloudinary()->upload($hinh->getRealPath(), ['folder' => 'Cars'])->getSecurePath();

            array_push($hinhXes, $uploadedFileUrl);
            // Store the secure URL in your array
        }
        $hinhXeJsonString = json_encode($hinhXes);
        $hinhXe = HinhXe::create(['hinhxe' => $hinhXeJsonString]);

        $idhinhxe = $hinhXe->idhinhxe;

        $xeData = $request->except('hinhxe');
        $xeData['idhinhxe'] = $idhinhxe;

        $newgia = str_replace(',', '', $request->gia);
        $xeData['gia'] = $newgia;

        $xeData['mieuta'] = convertToEscapedNewlines($request->mieuta);


        $xe = Xe::create($xeData);

        return back()->with(['thong-bao' => 'Thêm xe ' . $xe->tenxe . ' thành công!', 'type' => 'success'])
        ;
    }

    public function edit($id)
    {
        $xe = Xe::findOrFail($id);
        $dongXe = DongXe::all();
        $hangXe = HangXe::all();

        $hinhXeStr = HinhXe::find($xe->idhinhxe);
        $hinhXeArr = json_decode($hinhXeStr->hinhxe);

        return view('admin.xe.edit', compact('xe', 'dongXe', 'hangXe', 'hinhXeArr'));

    }

    public function update(UpdateRequest $request, $id)
    {
        // lấy thông tin xe cần update
        $data = $request->all();
        $xe = Xe::findOrFail($id);
        if ($request->has('xoa_hinh')) {
            foreach ($request->xoa_hinh as $url) {
                $this->deleteImageFromCloudinary($url);
                $this->removeImageUrlFromDatabase($url, $id);
            }
        }

        if ($request->hasFile('hinhxe')) {
            // decode chuỗi chứa các URL ảnh cũ thành một mảng
            $oldImageUrls = json_decode($xe->hinhxe->hinhxe, true);

            $hinhXes = [];

            foreach ($request->file('hinhxe') as $hinh) {

                if ($hinh->isValid()) {
                    // upload tệp tin lên Cloudinary
                    $uploadedFileUrl = cloudinary()->upload($hinh->getRealPath())->getSecurePath();
                    array_push($hinhXes, $uploadedFileUrl);
                }
            }
            $newImageUrls = array_merge($oldImageUrls, $hinhXes);

            $hinhXeJsonString = json_encode($newImageUrls);
            $hinhXe = HinhXe::create(['hinhxe' => $hinhXeJsonString]);

            $idhinhxe = $hinhXe->idhinhxe;

            $xeData = $request->except('hinhxe');
            $xeData['idhinhxe'] = $idhinhxe;

            $newgia = str_replace(',', '', $request->gia);
            $xeData['gia'] = $newgia;

            $xeData['mieuta'] = convertToEscapedNewlines($request->mieuta);
            unset($xeData['xoa_hinh']);

            $xe->update($xeData);
        } else {
            $newgia = str_replace(',', '', $request->gia);
            $data['gia'] = $newgia;
            $data['mieuta'] = convertToEscapedNewlines($request->mieuta);

            unset($data['xoa_hinh']);

            $xe->update($data);
        }

        return redirect('admin/xe')->with(['thong-bao' => 'Cập nhật xe ' . $xe->tenxe . ' thành công', 'type' => 'success']);
    }

    private function deleteImageFromCloudinary($url)
    {
        $public_id = basename($url, '.' . pathinfo($url, PATHINFO_EXTENSION));

        $public_id_with_folder = "Cars/" . $public_id;

        Cloudinary::destroy($public_id_with_folder);
    }

    private function removeImageUrlFromDatabase($url, $id)
    {
        $xe = Xe::findOrFail($id);
        $hinhXeArr = json_decode($xe->hinhxe->hinhxe, true);
        if (is_array($hinhXeArr) && in_array($url, $hinhXeArr)) {
            // check url cần xoá có trong array ko? Nếu có, xóa URL này khỏi array
            $key = array_search($url, $hinhXeArr);
            unset($hinhXeArr[$key]);

            // update lại DB với mảng mới
            $newHinhXeJsonString = json_encode(array_values($hinhXeArr));
            $xe->hinhxe->update(['hinhxe' => $newHinhXeJsonString]);
        }
    }

    public function destroy($id)
    {
        $xe = Xe::findOrFail($id);
        $urls = json_decode($xe->hinhxe->hinhxe, true);

        // Xoá cả hình trong Cloudinary
        foreach ($urls as $url) {
            $public_id = basename($url, '.' . pathinfo($url, PATHINFO_EXTENSION));
            $public_id_with_folder = "Cars/" . $public_id;
            Cloudinary::destroy($public_id_with_folder);
        }
        // Xoá cả hình trong DB
        $xe->hinhXe()->delete();

        $xe->delete();

        return back()->with(['thong-bao' => 'Xóa xe ' . $xe->tenxe . ' thành công!', 'type' => 'success']);
    }


    public function show($id)
    {
        $xe = Xe::with('dongXe')->where('idxe', $id)->firstOrFail();
        $comments = Comment::with('user')->where('idxe', $id)->get(); // Lấy các bình luận của xe
        return view('pages.chitietxe', compact('xe', 'comments'));
    }




}