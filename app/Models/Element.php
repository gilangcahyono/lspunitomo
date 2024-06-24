<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Element extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['kuk'];
    public $timestamps = false;
    // public $incrementing = false;

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function kuks(): HasMany
    {
        return $this->hasMany(Kuk::class);
    }
}
