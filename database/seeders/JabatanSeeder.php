<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'name' => 'Super Admin',
            'status' => 1
        ]);
        Level::create([
            'name' => 'Direksi',
            'status' => 1
        ]);
        Level::create([
            'name' => 'Manager',
            'status' => 1
        ]);
        Level::create([
            'name' => 'Supervisor',
            'status' => 1
        ]);
        Level::create([
            'name' => 'Staff',
            'status' => 1
        ]);
        Level::create([
            'name' => 'Operator',
            'status' => 1
        ]);
    }
}
