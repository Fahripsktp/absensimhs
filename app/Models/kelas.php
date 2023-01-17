<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table ="kelas";
    protected $guarded = ['id'];
    
    public function absen()
    {
        return $this->hasMany(absen::class);
    }
}
