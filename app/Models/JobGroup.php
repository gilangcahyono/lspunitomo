<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function scheme(): BelongsTo
    {
        return $this->belongsTo(Scheme::class);
    }

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    // public function directEvidence(): HasOne
    // {
    //     return $this->hasOne(DirectEvidence::class);
    // }
}
