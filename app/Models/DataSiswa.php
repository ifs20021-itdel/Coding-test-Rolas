<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswas';
    protected $fillable = ['firstname', 'secname', 'hp', 'nis', 'alamat', 'gender', 'foto', 'ekstrakurikuler', 'tahun'];
}
