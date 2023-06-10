<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'booth_id',
        'menu',
        'harga'
    ];

    // Define the relationship with Booth model
    public function booth()
    {
        return $this->belongsTo(Booth::class);
    }

    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class);
    }
}
