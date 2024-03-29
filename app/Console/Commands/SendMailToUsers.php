<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Jobs\SendEmailToUsers;
use App\User;

class SendMailToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command sends mail to the users';

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
     * @return mixed
     */
    public function handle()
    {       
         $user_obj = New User();
         $users = $user_obj->all();
         foreach($users as $user){
              dispatch(new SendEmailToUsers($user));
         }     
    }
}
