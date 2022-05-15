<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assembler extends Model
{
    use HasFactory;

    public function computer(): HasMany
    {
        return $this->hasMany(Computer::class);
    }
}
