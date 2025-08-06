<?php

namespace Database\Seeders;

use App\Models\BottomBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BottomBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bottom_banners = [
            [
                'page' => 'Home',
                'title' => 'Unlock Your Business Potential with a Virtual CFO',
                'sub_title' => 'Access top-tier financial expertise at your reach! Get the strategic guidance you need to achieve your growth goals.',
            ],
            [
                'page' => 'Service',
                'title' => 'Unlock Your Business Potential with a Virtual CFO',
                'sub_title' => 'Access top-tier financial expertise at your reach! Get the strategic guidance you need to achieve your growth goals.',
            ],
        ];

        foreach ($bottom_banners as $data) {
            BottomBanner::create([
                'page' => $data['page'],
                'title' => $data['title'],
                'sub_title' => $data['sub_title'],
            ]);
        }
    }
}
