<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alatBahan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peminjam()
    {
        return $this->hasMany(Peminjam::class, 'alatBahan_id');
    }
}
