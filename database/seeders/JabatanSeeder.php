<?php

namespace Database\Seeders;

use App\Models\Jabatan;
// use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jabatan::create([
            'name' => 'Super Admin',
            'status' => 1
        ]);
        jabatan::create([
            'name' => 'Direksi',
            'status' => 1
        ]);
        jabatan::create([
            'name' => 'Manager',
            'status' => 1
        ]);
        jabatan::create([
            'name' => 'Supervisor',
            'status' => 1
        ]);
        jabatan::create([
            'name' => 'Staff',
            'status' => 1
        ]);
        jabatan::create([
            'name' => 'Operator',
            'status' => 1
        ]);
    }
}
