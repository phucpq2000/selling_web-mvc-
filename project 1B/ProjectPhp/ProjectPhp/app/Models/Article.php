<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'body', //các thuộc tính
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
