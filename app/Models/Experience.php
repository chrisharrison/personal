<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $dates = [
        'start',
        'end'
    ];

    public static function yearsExperience()
    {
        $earliestExperience = Experience::orderBy('start', 'asc')->first();
        return (int) date('Y') - (int) $earliestExperience->start->year;
    }

	public function scopeEnabled($query)
    {
        return $query->where('enabled', '=', true);
    }

    public function items()
    {
        return $this->hasMany('App\Models\ExperienceItem');
    }

    public function dateRange()
    {
    	if (!empty($this->start)) {
    		$start = $this->start->format('F Y');
    	} else {
    		$start = 'Unknown';
    	}

    	if (!empty($this->end)) {
    		$end = $this->end->format('F Y');
    	} else {
    		$end = 'Present';
    	}

    	return $start . ' - ' . $end;
    }
}
