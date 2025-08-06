<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hero_section = [
            [
                'header' => 'Powering Your Success',
                'title' => 'Trusted Partners in Financial & Operational Leadership',
                'sub_title' => 'Running a business is difficult enough without overpaying for essential utility services like gas, electricity, water, insurance and more.',
            ],
        ];

        foreach ($hero_section as $data) {
            HeroSection::create([
                'header' => $data['header'],
                'title' => $data['title'],
                'sub_title' => $data['sub_title'],
            ]);
        }
    }
}
