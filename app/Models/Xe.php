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

    public function giaodich()
    {
        return $this->hasMany('App\Models\GiaoDich', 'idxe', 'idxe');
    }

    public function hoadon()
    {
        return $this->hasMany('App\Models\HoaDon', 'idxe', 'idxe');
    }


    public function danhgia()
    {
        return $this->hasMany('App\Models\Comment', 'idxe', 'idxe');
    }

}
