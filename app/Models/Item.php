<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'list';
    protected $fillable = [
        'code',
        'recipient_name_1',
        'recipient_name_2',
        'yuu',
        'address_1',
        'address_2',
        'address_3',
        'phone',
        'shipping_category',
    ];
}
