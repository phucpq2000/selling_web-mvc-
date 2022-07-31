<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    // public function role() {
    //     return $this->belongsTo(Role::class);
    // }
    // public function hasRole($roles) {
    //     var_dump($roles);
    //     foreach($roles as $role)
    //     return strcmp($role, $this->role->name)==0 ;
    //     return false;
    //  }

}
