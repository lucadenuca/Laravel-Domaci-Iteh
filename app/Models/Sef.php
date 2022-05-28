<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gradiliste;
use App\Models\Radnik;

class Sef extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'firma',
        'specijalnost',
        'gradiliste_id'
    ];

    public function gradiliste()
    {
        return $this->belongsTo(Gradiliste::class);
    }

    public function radnici()
    {
        return $this->hasMany(Radnik::class);
    }
}
