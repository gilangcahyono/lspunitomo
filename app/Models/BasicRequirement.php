<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BasicRequirement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    // public $incrementing = false;

    public function schemes(): BelongsToMany
    {
        return $this->belongsToMany(Scheme::class, 'scheme_basic_requirements');
    }
}
