<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sef;

class Gradiliste extends Model
{
    use HasFactory;

    public function sefovi()
    {
        return $this->hasMany(Sef::class);
    }
}
