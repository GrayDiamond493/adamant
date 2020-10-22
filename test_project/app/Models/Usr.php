<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usr extends Model

{
    use HasFactory;
    public $table = "usr";
    protected $fillable = [
        'username', 'password'
    ];
}
