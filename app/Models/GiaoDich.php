<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    protected $table = 'giaodich';
    protected $primaryKey = 'idgiaodich';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'iduser');
    }

    public function xe()
    {
        return $this->belongsTo('App\Models\Xe', 'idxe', 'idxe');
    }

    public function hoadon()
    {
        return $this->hasOne('App\Models\HoaDon', 'idgiaodich', 'idgiaodich');
    }
}
