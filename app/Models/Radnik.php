<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sef;

class Radnik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'firma',
        'zanat',
        'sef_id'
    ];

    public function sef()
    {
        return $this->belongsTo(Sef::class);
    }
}
