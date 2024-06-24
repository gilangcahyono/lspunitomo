<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelfAssessment extends Model
{
    use HasFactory;

    protected $primaryKey = 'registration_number';
    protected $guarded = [];
    // public $timestamps = false;
    public $incrementing = false;

    // public function candidateAccession(): BelongsTo
    // {
    //     return $this->belongsTo(CandidateAccession::class);
    // }
}
