<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim', 'jurusan'];

    public function nilais(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
}