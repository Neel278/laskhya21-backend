<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Neel Thakkar',
            'email' => 'admin@lakshya2021.com',
            'message' =>
            'Welcome Lakshya team. This is demo message!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
