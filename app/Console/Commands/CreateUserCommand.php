<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;


class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $name=Str::random(8);
       $password=Str::random(8);
       User::create([
        'name'=>$name,
        'email'=>$name.'@gmail.com',
        'password'=>bcrypt($password),

       ]);

       $this->info('Success');

    }
}
