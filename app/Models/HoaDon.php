<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoadon';
    protected $primaryKey = 'idhoadon';
    protected $guarded = [];
    public function giaodich()
    {
        return $this->belongsTo('App\Models\GiaoDich', 'idgiaodich', 'idgiaodich');
    }

    public function xe()
    {
        return $this->belongsTo('App\Models\Xe', 'idxe', 'idxe');
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'iduser');
    }
}
