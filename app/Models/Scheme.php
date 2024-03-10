<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scheme extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'code';
    // protected $with = ['unit' => [
    //     'element' => ['kuk'],
    // ]];

    // protected $with = ['unit'];

    public function unit(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
