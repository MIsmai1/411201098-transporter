<?php

namespace App;

use App\Kurir;
use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    use HasFactory;

    protected $table = 'kurirs';
    protected $fillable = [
        'name', 'email', 'password'
    ];
}
