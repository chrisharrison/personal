<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index', $this->cvData());
    }

    public function cv()
    {
    	return view('cv', $this->cvData());
    }

    private function cvData()
    {
    	return [
    		'skills' => Skill::enabled()->get(),
    		'experiences' => Experience::enabled()->get(),
    		'yearsExperience' => Experience::yearsExperience()
		];
    }
}
