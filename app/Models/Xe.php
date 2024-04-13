<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    protected $table = 'xe';
    protected $primaryKey = 'idxe';

    protected $guarded = [];

    public function dongxe()
    {
        return $this->belongsTo('App\Models\DongXe', 'iddongxe', 'iddongxe');
    }

    public function hangxe()
    {
        return $this->belongsTo('App\Models\HangXe', 'idhangxe', 'idhangxe');
    }

    public function hinhxe()
    {
        return $this->belongsTo('App\Models\HinhXe', 'idhinhxe', 'idhinhxe');
    }

    public function hoadon()
    {
        return $this->belongsToMany('App\Models\HoaDon', 'xe_hoadon', 'idxe', 'idhoadon');
    }

    public function danhgia()
    {
        return $this->hasMany('App\Models\Comment', 'iddanhgia', 'iddanhgia');
    }

}
