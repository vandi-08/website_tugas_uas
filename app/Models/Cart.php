<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product; // ✅ WAJIB kalau relasi ke Product

class Cart extends Model
{
    protected $fillable = [
        'product_id', 'quantity', 'added_at'
    ];

    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
