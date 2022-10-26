<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Label84\HoursHelper\Facades\HoursHelper;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info("Cron is working fine!");
        $user = User::all();
        $hours = HoursHelper::create('2022-01-01 08:00', '2022-01-01 08:30', 15, 'Y-m-d H:i');

        foreach ($hours as $key => $value) {
            # code...
        }




        return 0;
    }
}
