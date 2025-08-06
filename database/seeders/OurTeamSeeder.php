<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $our_team = [
            [
                'name' => 'Thomas Wilkinson',
                'designation' => 'FOUNDER',
                'title' => 'Our Team',
                'sub_title' => 'Your Trusted Partners for Innovative Strategies and Unmatched Success',
                'description' => null,
                'image' => null,
            ],
        ];

        foreach ($our_team as $data) {
            OurTeam::create([
                'name' => $data['name'],
                'designation' => $data['designation'],
                'title' => $data['title'],
                'sub_title' => $data['sub_title'],
                'description' => $data['description'],
                'image' => $data['image'],
            ]);
        }
    }
}
