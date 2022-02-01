<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function airplane()
    {
        return $this->belongsTo(airplane::class);
    }
}
