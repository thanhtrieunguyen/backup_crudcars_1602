<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xe;

class PageController extends Controller
{
    public function getHome()
    {
        $xes = Xe::with('dongXe', 'hangXe')->orderBy('gia', 'desc')->take(6)->get();

        // return view('pages.trang-chu', ['xes' => $xes]);
        return view('pages.trangchu', compact('xes'));
    }

    public function getDangNhap()
    {
        return view('pages.dangnhap');
    }

    public function getDangKy()
    {
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        return view('pages.dangky', compact('today'));
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.lienhe');
    }
}
