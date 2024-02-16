<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietXe extends Model
{
    protected $table = 'chitietxe';
    protected $primaryKey = 'idchitietxe';


    public function xe() {
        return $this->belongsTo('App\Models\Xe', 'idxe', 'idxe');
    }
}
