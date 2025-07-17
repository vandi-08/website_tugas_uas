<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart; // ✅ Tambahan

class Payment extends Model
{
    protected $primaryKey = 'payment_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'payment_id', 'cart_id', 'amount', 'payment_method', 'status', 'paid_at'
    ];

    public $timestamps = true;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
