<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance extends Model
{
    use  hasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
