<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    // Relationships

    public function owner()
    {
        return $this->morphTo();
    }
}
