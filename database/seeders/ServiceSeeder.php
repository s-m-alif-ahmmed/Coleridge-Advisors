<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about_us = [
            [
                'title' => 'Growth Acceleration',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
            [
                'title' => 'Profitability Strategies',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
            [
                'title' => 'Performance Management',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
            [
                'title' => 'Access to Capital',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
            [
                'title' => 'IPO & Exit Planning',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
            [
                'title' => 'Business Process Outsourcing',
                'description' => 'We create content strategies that donot just sound good—they rank. While many SEO providers chase competitive keywords without considering rankability, we focus on smart opportunities that your site can realistically win.',
                'thumbnail' => null,
                'illustration' => null,
            ],
        ];

        foreach ($about_us as $data) {
            Service::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'thumbnail' => $data['thumbnail'],
                'illustration' => $data['illustration'],
            ]);
        }
    }
}
