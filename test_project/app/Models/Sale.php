<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    use HasFactory;
    public $table = "products";
    protected $fillable = [
        'name', 'detail','price'
    ];
}
