<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'quantity', 'image_url'];
    public $timestamps = false;

    public function cartItems() {
        return $this->hasMany(CartItems::class);
    }

}
