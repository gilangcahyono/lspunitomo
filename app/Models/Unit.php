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
    // protected $primaryKey = 'code';
    public $timestamps = false;
    // public $incrementing = false;

    public function scheme(): BelongsTo
    {
        return $this->belongsTo(Scheme::class);
    }

    public function jobGroup(): BelongsTo
    {
        return $this->belongsTo(JobGroup::class);
    }

    public function elements(): HasMany
    {
        return $this->hasMany(Element::class);
    }
}
