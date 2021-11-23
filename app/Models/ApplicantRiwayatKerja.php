<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantRiwayatKerja extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pekerjaan';
    protected $guarded = [];
}