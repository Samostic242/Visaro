<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(
            ['name' => 'Add User', 'slug' => 'add-user', 'description' => 'Anyone with this permission can add new user'],
        );
    }
}
