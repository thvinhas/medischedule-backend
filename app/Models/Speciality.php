<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speciality extends Model
{
    /** @use HasFactory<\Database\Factories\SpecialityFactory> */
    use HasFactory, softDeletes;

    protected $fillable = ['name'];
}
