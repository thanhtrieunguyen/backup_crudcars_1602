<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DongXe extends Model
{

    protected $table = 'dongxe';
    protected $primaryKey = 'iddongxe';

    protected $guarded = [];

    public function xe()
    {
        return $this->hasMany('App\Models\Xe', 'iddongxe', 'iddongxe');
    }
}
