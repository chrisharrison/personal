<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class GeneratePDF extends Command
{
    protected $signature = 'pdf {url=https://chrisharrison.me.uk/cv}';

    protected $description = 'Generates PDF version of CV. Relies on wkhtmltopdf';

    public function handle()
    {
        $process = new Process('wkhtmltopdf '.$this->argument('url').' '.public_path().'/chris-harrison-cv.pdf');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $this->info($process->getOutput());
    }
}
