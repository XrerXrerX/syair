<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function syair()
    {
        return $this->hasMany(Syair::class);
    }
}
