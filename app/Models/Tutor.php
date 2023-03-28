<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'id_tutor',
        'alamat',
        'gender',
        'mk',
        'usia'
    ];
    protected $guarded = ['id'];
}
