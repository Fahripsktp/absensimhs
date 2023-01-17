<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;
    protected $table ="fakultas";
    protected $guarded = ['id'];

    public function absen()
    {
        return $this->hasMany(absen::class);
    }
}
