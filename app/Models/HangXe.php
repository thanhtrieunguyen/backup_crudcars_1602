<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    protected $table = 'hangxe';
    protected $primaryKey = 'idhangxe';
    protected $guarded = [];
    public function xe()
    {
        return $this->hasMany('App\Models\Xe', 'idhangxe', 'idhangxe');
    }
}
