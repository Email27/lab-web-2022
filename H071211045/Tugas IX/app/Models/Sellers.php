<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;

    protected $table = 'sellers';

    protected $fillable = [
        'name',
        'address',
        'gender',
        'phone',
        'status',
    ];
}
