<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scheme extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    // protected $primaryKey = 'code';
    // public $incrementing = false;

    public function jobGroups(): HasMany
    {
        return $this->hasMany(JobGroup::class);
    }

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    // public function skknis(): BelongsToMany
    // {
    //     return $this->belongsToMany(Skkni::class, 'scheme_skknis');
    // }

    // public function basicRequirements(): BelongsToMany
    // {
    //     return $this->belongsToMany(BasicRequirement::class, 'scheme_basic_requirements');
    // }

    public function assessors(): HasMany
    {
        return $this->hasMany(Assessor::class);
    }

    public function accessions(): HasMany
    {
        return $this->hasMany(Accession::class);
    }
}
