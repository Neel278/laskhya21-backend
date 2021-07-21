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
            'name' => 'Codesters',
            'img' => '1dfgOdFzicE3L2V_tdeLKC_dm82Us1dLZ',
            'description' => 'You turn adult from bug when you code,What you all need is a perfect logic mode!, Let\'s begin with sharpening your sight, So that you can come into light!',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Electrobuzz',
            'img' => '1vZCT4_czKa5_qQWYbv1lBj-QywbCwArM',
            'description' => 'In electrobuzz your sight will be a lightening bolt that causes \'transients\' in everyone\'s nerve line, You will be step up transformer, Too boost our spirits',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Chemstorm',
            'img' => '1RZY7c8CF95VcLj4frAkF6p96lRRz88Sy',
            'description' => 'Your talent is unique as  an orbital, For which only your presence can fill this space, As your talent increases, Our energy level rises, We are in this excited state to welcome you all !!',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Civilusion',
            'img' => '16Vbi4kXEqtApcJIPdhuiFInD0a9-CXvB',
            'description' => 'You are here with all over cement,building\'s the game; going surveying through the woods, crossing through the rivers, You are the achievers with yellow helmet on head, From mining to shining (in sun)',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Mechnova',
            'img' => '16ObodcJb5aZqNTezsgGLADwwOAqj-W-k',
            'description' => 'You are like an IC engine, There is continuous combustion of thoughts,desires and experiments..!!, Mechnova can be your cooling system then!!',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Robotics',
            'img' => '',
            'description' => 'The thing you made has computer for brain.., And camera for eyes.., Instead of muscle and skin it has metal & wires..., that wonder us all the times !!',
            'department_id' => 1
        ]);
        DB::table('events')->insert([
            'name' => 'Mindspark',
            'img' => '16H23ZbcPL-HBRCDiQ9nzOy85qoEegUSA',
            'description' => 'You closed your mouth and spoke to us in hundred silent ways..., You write because you have something to say!!, Be a part of mindspark and give yourself a chance to embrace.',
            'department_id' => 2
        ]);
        DB::table('events')->insert([
            'name' => 'Carnival-O-Fun',
            'img' => '1ZQL60O3S7P_O6eYSzlKCazriUZLLa8XC',
            'description' => 'Don\'t forget to have fun..., Even in the pandemic play game, Work hard but don\'t forget to live your life to the fullest !!, Lakshya2k21 is here to entertain you at it\'s best!!',
            'department_id' => 2
        ]);
        DB::table('events')->insert([
            'name' => 'Workshops',
            'img' => '19OZfWkfya1evurI4zEKuhcV1DEWcwIJi',
            'description' => 'What is more large than knowledge and more important!!, Knowledge of thoughts and deeds!!, Attend our workshop and expand your knowledge at fullest!!',
            'department_id' => 3
        ]);
    }
}
