<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment', 'votes', 'spam', 'reply_id', 'page_id', 'users_id'];

    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'comment';

    public function replies()
    {

        return $this->hasMany('App\Models\Comment', 'id', 'reply_id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}
