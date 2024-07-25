<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    public function film()
    {
        return $this->belongsToMany(Genre::class, 'genre_film', 'id_film', 'id_genre');
    }
}
