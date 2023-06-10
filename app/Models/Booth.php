<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booth extends Model
{
    use HasFactory;

    protected $fillable = ['boothName'];

    // Define the relationship with Menu model
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
