<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = [
        'kode',
        'nama',
        'sks',
        'semester',
        'aktif',
    ];

    protected function casts(): array
    {
        return [
            'aktif' => 'boolean',
        ];
    }
}
