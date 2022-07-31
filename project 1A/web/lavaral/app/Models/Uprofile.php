<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uprofile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','full_name', 'address','avatar', 'birthday',
    ];
}
