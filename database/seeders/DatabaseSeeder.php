<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            DepartmentsTableSeeder::class,
            EventsTableSeeder::class,
            MainEventsTableSeeder::class,
            ContactTableSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
