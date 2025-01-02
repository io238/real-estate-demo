<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    // Relationships

    public function members()
    {
        return $this->hasMany(User::class);
    }
}
