<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Permission;

class SeedPermissions extends Command
{
    protected $signature = 'seed:permissions';
    protected $description = 'Seed permissions into the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $permissions = [
            'create_ticket', 'show_all_tickets', 'show_active_tickets', 
            'change_ticket_status', 'create_user', 'delete_user', 
            'assign_users', 'set_priority'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $this->info('Permissions seeded successfully.');
    }
}

