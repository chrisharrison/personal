<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function scopeEnabled($query)
    {
        return $query->where('enabled', '=', true);
    }
}
