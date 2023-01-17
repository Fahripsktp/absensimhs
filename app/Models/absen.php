<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;
    protected $table ="absens";
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
}
