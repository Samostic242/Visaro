<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            ['name' => 'Add User', 'slug' => 'add-user', 'description' => 'Anyone with this permission can add new user', 'created_at' => now(), 'updated_at' => now()],


        );
    }
}
