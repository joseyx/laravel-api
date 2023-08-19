<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use PhpParser\Node\Stmt\TryCatch;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:makeAdmin {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes a user an admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // change the user's is_admin column to true

        try {
            //code...
            $user = User::where('email', $this->argument('email'))->firstOrFail();

            $user->is_admin = true;

            $user->save();

            $this->info('User ' . $user->email . ' is now an admin');
        } catch (\Throwable $th) {
            //throw $th;
            $this->error('User ' . $this->argument('email') . ' not found');
        }
    }

}
