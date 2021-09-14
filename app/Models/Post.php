<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function board(){
        return $this->belongsTo(Board::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
