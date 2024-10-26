<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('attendees')->insert([
            ['name' => 'Dhiraj', 'email' => 'dhiraj@gmail.com', 'event_id' => 12],
            ['name' => 'Milan', 'email' => 'milan@gmail.com', 'event_id' => 12],
            ['name' => 'Krishal', 'email' => 'krishal@gmail.com', 'event_id' => 13],
            ['name' => 'Sajan', 'email' => 'sajan@gmail.com', 'event_id' => 13],
            ['name' => 'Ajay', 'email' => 'ajay@gmail.com', 'event_id' => 15],
        ]);
    }
}
