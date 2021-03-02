<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    use HasFactory;
    protected $table = 'bahasa';
    protected $fillable = [
        'noPeserta',
        'namaBahasa',
        'mendengar',
        'membaca',
        'menulis'
    ];
}
