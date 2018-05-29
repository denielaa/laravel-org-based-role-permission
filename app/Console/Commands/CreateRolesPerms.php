<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateRolesPerms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role-perm:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and perms';

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

    }
}
