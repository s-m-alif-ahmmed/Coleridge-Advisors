<?php

namespace Database\Seeders;

use App\Models\MainPlaceSlider;
use App\Models\PlaceSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main_place_sliders = [
            [
                [
                    'title' => 'Empowering Business Growth & Performance',
                    'sub_title' => 'We help businesses unlock their full potential with data-driven strategies',
                    'image' => null,
                ],
                [
                    'title' => 'Drive Innovation with Confidence',
                    'sub_title' => 'Unlock your business potential using cutting-edge tools',
                    'image' => null,
                ],
                [
                    'title' => 'Make Smarter Business Decisions',
                    'sub_title' => 'Our team brings insight and strategy together',
                    'image' => null,
                ],
            ],
            [
                [
                    'title' => 'Achieve Operational Excellence',
                    'sub_title' => 'Improve performance with tailored business solutions',
                    'image' => null,
                ],
                [
                    'title' => 'Transform Your Strategy Today',
                    'sub_title' => 'Let us guide your business through intelligent transformation',
                    'image' => null,
                ],
                [
                    'title' => 'Results that Matter',
                    'sub_title' => 'We deliver measurable improvements for every client',
                    'image' => null,
                ],
            ],
            [
                [
                    'title' => 'Achieve Operational Excellence',
                    'sub_title' => 'Improve performance with tailored business solutions',
                    'image' => null,
                ],
                [
                    'title' => 'Transform Your Strategy Today',
                    'sub_title' => 'Let us guide your business through intelligent transformation',
                    'image' => null,
                ],
                [
                    'title' => 'Results that Matter',
                    'sub_title' => 'We deliver measurable improvements for every client',
                    'image' => null,
                ],
            ],
        ];

        foreach ($main_place_sliders as $sliderGroup) {
            $main = MainPlaceSlider::create();

            foreach ($sliderGroup as $slide) {
                PlaceSlider::create([
                    'main_place_slider_id' => $main->id,
                    'title' => $slide['title'],
                    'sub_title' => $slide['sub_title'],
                    'image' => $slide['image'],
                ]);
            }
        }
    }
}
