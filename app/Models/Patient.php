<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory, softDeletes;

    protected $fillable = ["name", "phone", "insurance_id"];

    public function insurance(): BelongsTo
    {
        return $this->belongsTo(Insurance::class);
    }

}
