<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['_token'];
    protected $fillable = [];
    protected $table = 'danhgia';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'iduser');
    }

    public function xe()
    {
        return $this->belongsTo('App\Models\Xe', 'idxe', 'idxe');
    }
}
