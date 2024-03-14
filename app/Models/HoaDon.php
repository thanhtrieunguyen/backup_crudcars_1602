<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoadon';
    protected $primaryKey = 'idhoadon';
    protected $guarded = [];
    public function chitiethoadon()
    {
        return $this->hasOne('App\Models\ChiTietHoaDon', 'idchitiethoadon', 'idchitiethoadon');
    }

    public function xe()
    {
        return $this->belongsToMany('App\Models\Xe', 'xe_hoadon', 'idxe', 'idhoadon');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'iduser');
    }
}
