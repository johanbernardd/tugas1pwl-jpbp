<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pasien', 'obat_id'];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
