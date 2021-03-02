<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;
    protected $table = 'pengalamanKerja';
    protected $fillable = [
        'noPeserta',
        'namaPerusahaan',
        'bidang',
        'alamat',
        'jabatanAwal',
        'jabatanAkhir',
        'tanggalMulai',
        'tanggalAkhir',
        'gaji',
        'alasanBerhenti'
    ];
}
