<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEdu extends Model
{
    use HasFactory;

    protected $table = 'applicants_education';
    protected $guarded = [];
}