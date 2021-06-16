<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'Turncoat',
            'description' => 'Hello world to the events in lakshya 2021.',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Mock',
            'description' => 'Hello world to the events in lakshya 2021.',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'COD',
            'description' => 'Hello world to the events in lakshya 2021.',
            'department_id' => 2
        ]);
        DB::table('events')->insert([
            'name' => 'LGT',
            'description' => 'Hello world to the events in lakshya 2021.',
            'department_id' => 2
        ]);
    }
}
