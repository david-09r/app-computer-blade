<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assembler extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'payment_method',
        'email',
        'password',
        'position'
    ];

    public function computer(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Computer::class);
    }
}
