<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = [
        'noPeserta',
        'tahunLulus',
        'ipk',
        'formasi',
        'namaLengkap',
        'namaPanggilan',
        'tempatLahir',
        'tanggalLahir',
        'email',
        'jenisKelamin',
        'agama',
        'status',
        'tinggiBadan',
        'noIdentitas',
        'alamat',
        'noHp',
        'noTelp',
        'namaTanggungan',
        'jenisKelaminTanggungan',
        'hubungan',
        'pendidikanTerakhirTanggungan',
        'namaKontakDarurat',
        'noHpKontakDarurat',
        'alamatKontakDarurat',
        'namaInstitusi',
        'kotaInstitusi',
        'jurusan',
        'lanjutPendidikan',
        'namaOrganisasi',
        'jabatanOrganisasi',
        'tahunOrganisasi',
        'namaPelatihan',
        'tahunPelatihan',
        'masaBerlaku',
        'lain1',
        'lain2',
        'lain3',
        'lain4',
        'lain5',
        'lain6',
        'lain7',
        'lain8',
        'lain9',
        'lain10',
        'image_cv'
    ];
}
