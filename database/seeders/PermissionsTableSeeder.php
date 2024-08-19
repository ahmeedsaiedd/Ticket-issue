<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'create_ticket', 'show_all_tickets', 'show_active_tickets', 
            'change_ticket_status', 'create_user', 'delete_user', 
            'assign_users', 'set_priority'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

