<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Models\Skill;
use App\Models\Experience;

class IndexController extends Controller
{
    public function index()
    {
        if (Cache::has('index')) {
            return Cache::get('index');
        } else {
            $view = (string) view('index', $this->cvData());
            Cache::forever('index', $view);
            return $view;
        }
    }

    public function cv()
    {
        return view('cv', $this->cvData());
    }

    private function cvData()
    {
        return [
            'skills' => Skill::enabled()->ordered()->get(),
            'experiences' => Experience::enabled()->ordered()->get(),
            'yearsExperience' => Experience::yearsExperience()
        ];
    }
}
