<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Laravel Conference',
                'description' => 'A Laravel conference',
                'date' => '2024-10-01',
                'location' => 'kathmandu',
                'category_id' => 1
            ],
            [
                'title' => 'React Workshop',
                'description' => 'A React workshop',
                'date' => '2024-11-01',
                'location' => 'lalitpur',
                'category_id' => 1
            ],
            [
                'title' => 'Tech Innovators Seminar',
                'description' => 'A seminar on the latest in tech innovation',
                'date' => '2024-12-05',
                'location' => 'janakpur',
                'category_id' => 3
            ],
            [
                'title' => 'Cybersecurity Webinar',
                'description' => 'An online webinar about cybersecurity practices',
                'date' => '2024-10-15',
                'location' => 'bhaktpur',
                'category_id' => 7
            ],
            [
                'title' => 'AI in Healthcare Meetup',
                'description' => 'Meetup discussing AI applications in healthcare',
                'date' => '2024-11-20',
                'location' => 'pokhara',
                'category_id' => 6
            ]
        ]);
    }
}
