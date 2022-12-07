<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'foodname',
        'quantity',
        'price',
        'stock',
        'new_stock',
        'name',
        'phone',
        'address',
    ];
}
