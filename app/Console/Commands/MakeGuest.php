<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeGuest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:makeGuest {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes admin privileges from a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // change the user's is_admin column to flase

        try {
            //code...
            $user = User::where('email', $this->argument('email'))->firstOrFail();

            $user->is_admin = false;

            $user->save();

            $this->info('User ' . $user->email . ' is now a guest');
        } catch (\Throwable $th) {
            //throw $th;
            $this->error('User ' . $this->argument('email') . ' not found');
        }
    }
}
