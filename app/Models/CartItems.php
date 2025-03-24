<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'quantity', 'price'];
    public $timestamps = true;
        
    public function product() {
        return $this->belongsTo(Product::class);
    }
    
    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
