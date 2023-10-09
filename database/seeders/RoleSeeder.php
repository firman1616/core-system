<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Create',
            'status' => 1
        ]);
        Role::create([
            'name' => 'Read',
            'status' => 1
        ]);
        Role::create([
            'name' => 'Update',
            'status' => 1
        ]);
        Role::create([
            'name' => 'Cancel',
            'status' => 1
        ]);
        Role::create([
            'name' => 'Approve',
            'status' => 1
        ]);
    }
}
