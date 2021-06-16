<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Litrary',
        ]);
        DB::table('departments')->insert([
            'name' => 'Fun',
        ]);
        DB::table('departments')->insert([
            'name' => 'Robotics',
        ]);
        DB::table('departments')->insert([
            'name' => 'Comp/IT',
        ]);
        DB::table('departments')->insert([
            'name' => 'Elec/EC/IT',
        ]);
        DB::table('departments')->insert([
            'name' => 'Chemical',
        ]);
        DB::table('departments')->insert([
            'name' => 'Civil',
        ]);
        DB::table('departments')->insert([
            'name' => 'Mechanical',
        ]);
    }
}
