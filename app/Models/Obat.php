<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
