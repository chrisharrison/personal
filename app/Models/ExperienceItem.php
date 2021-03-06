<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceItem extends Model
{
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort', 'asc');
    }
    
    public function scopeEnabled($query)
    {
        return $query->where('enabled', '=', true);
    }
}
