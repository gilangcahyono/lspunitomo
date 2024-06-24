<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assessor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function scheme(): BelongsTo
    {
        return $this->belongsTo(Scheme::class);
    }

    public function accessions(): HasMany
    {
        return $this->hasMany(Accession::class);
    }
}
