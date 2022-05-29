<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_purchase',
        'date_delivery',
        'date_assembly',
        'assembler_id',
        'seller_id',
        'user_id'
    ];

    public function assembler(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Assembler::class);
    }

    public function seller(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cabinet(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Cabinet::class);
    }

    public function cpu(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Cpu::class);
    }

    public function fan()
    {
        return $this->hasOne(Fan::class);
    }

    public function graphic()
    {
        return $this->hasOne(Graphic::class);
    }

    public function heatsink()
    {
        return $this->hasOne(Heatsink::class);
    }

    public function memory()
    {
        return $this->hasOne(Memory::class);
    }

    public function motherboard()
    {
        return $this->hasOne(Motherboard::class);
    }

    public function powersupply()
    {
        return $this->hasOne(PowerSupply::class);
    }

    public function storage()
    {
        return $this->hasOne(Storage::class);
    }

    public function date_local_input($key)
    {
        $dateAll = $key;
        $date = substr($dateAll, 11);
        $date = substr($dateAll, 0, -9)."T".$date;
        return $date;
    }
}
