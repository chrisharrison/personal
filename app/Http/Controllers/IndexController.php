<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Models\Skill;
use App\Models\Experience;
use Artisan;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', $this->data());
    }

    public function cv()
    {
        return view('cv', $this->data());
    }

    public function cvPdf() {
        $path = public_path().'/chris-harrison-cv.pdf';
        if (!file_exists($path)) {
            Artisan::call('pdf');
        }

        return response()->download($path);
    }

    private function data()
    {
        return [
            'skills' => Skill::enabled()->ordered()->get(),
            'experiences' => Experience::enabled()->ordered()->get(),
            'yearsExperience' => Experience::yearsExperience()
        ];
    }
}
