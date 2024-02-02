<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kuk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function element(): BelongsTo
    {
        return $this->belongsTo(Element::class);
    }
}
