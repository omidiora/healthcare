<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

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
        $users = User::all();
        foreach ($users as $user) {
            $currentweek = Carbon::now()
                ->year . '-' . Carbon::now('w')
                ->weekOfYear . ' W/C ' . Carbon::now()
                ->day . '-' . Carbon::now();

            DB::table('timesheets')->insert([
                'name' => $currentweek,

            ]);
        }
        $this->info('Add:Sheets Command Run successfully!');
    }
}
