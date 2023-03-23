<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syair extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['nm_pasar'] ?? false, function ($query, $nm_pasar) {
            return $query->whereHas('nm_pasar', function ($query) use ($nm_pasar) {
                $query->where('slug', $nm_pasar);
            });
        });
    }


    public function pasaran()
    {
        return $this->belongsTo(Pasaran::class);
    }
}
