<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterModel extends Model
{
    use HasFactory;

    protected $table = 'centers';
    protected $fillable = [
        'name',
        'center_name',
        'address',
        'photo'
    ];
}
