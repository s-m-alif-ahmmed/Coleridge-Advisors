<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about_us = [
            [
                'title' => 'Empowering Business Growth & Performance',
                'sub_title' => 'We help businesses unlock their full potential with data-driven strategies',
                'video_title' => 'Driven by Purpose, Guided by Vision',
                'thumbnail' => null,
                'video' => null,
            ],
        ];

        foreach ($about_us as $data) {
            AboutUs::create([
                'title' => $data['title'],
                'sub_title' => $data['sub_title'],
                'video_title' => $data['video_title'],
                'thumbnail' => $data['thumbnail'],
                'video' => $data['video'],
            ]);
        }
    }
}
