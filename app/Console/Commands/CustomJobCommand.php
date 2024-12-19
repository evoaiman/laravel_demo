<?php

namespace App\Console\Commands;

use App\Jobs\CustomJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CustomJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        CustomJob::dispatch();

        Log::info('Custom Job Command dispatched the job.');
        return Command::SUCCESS;
    }
}
