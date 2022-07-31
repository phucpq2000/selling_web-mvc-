<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','status','date','total','quantity'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function orderproducts() {
        return $this->hasMany(OrderProduct::class);
    }
}
