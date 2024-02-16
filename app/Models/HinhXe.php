<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhXe extends Model
{
    protected $table = 'hinhxe';
    protected $fillable = ['hinhxe'];
    protected $primaryKey = 'idhinhxe';

    public function xe()
    {
        return $this->hasOne('App\Models\HinhXe', 'idhinhxe', 'idhinhxe');
    }


}
