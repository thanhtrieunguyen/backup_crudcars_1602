<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'idrole';

    public function xe()
    {
        return $this->hasMany('App\Models\User', 'iduser', 'iduser');
    }
}
