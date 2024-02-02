<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skema(): BelongsTo
    {
        return $this->belongsTo(Skema::class);
    }

    public function element(): HasMany
    {
        return $this->hasMany(Element::class);
    }
}
