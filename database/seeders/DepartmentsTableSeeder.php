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
            'name' => 'Techwizards',
            'description' => 'Techwizards are great when it works, If you can handle all the buggy quirks, Patience is a key when dealing with the inconveniences, When pushing all the right buttons take geniuses',
            'img' => '1UnN9iZOIaIbPIM6tegdN5h48lILJA32N',
        ]);
        DB::table('departments')->insert([
            'name' => 'Zapdos',
            'description' => 'You are the master of your fate, You are the caption of your soul, Let zapdos give you a chance to shine!!',
            'img' => '1JmsAhgEsl1qsP6wcNa4H3VvqysQHiNfA',
        ]);
        DB::table('departments')->insert([
            'name' => 'Workshops',
            'description' => 'What is more large than knowledge and more important!!, Knowledge of thoughts and deeds!!, Attend our workshop and expand your knowledge at fullest!!',
            'img' => '138GnlLcKSMK78DnG7lqBzPCur7mGyu88',
        ]);
    }
}
