<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Accession extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $primaryKey = 'registrationNumber';
    public $timestamps = false;
    // public $incrementing = false;

    public function scheme(): BelongsTo
    {
        return $this->belongsTo(Scheme::class);
    }

    public function assessor(): BelongsTo
    {
        return $this->belongsTo(Assessor::class);
    }

    public function assessmentSchedule(): BelongsTo
    {
        return $this->belongsTo(AssessmentSchedule::class);
    }
}
