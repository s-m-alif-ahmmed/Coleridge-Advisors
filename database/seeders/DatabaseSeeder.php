<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Disable foreign key checks to prevent issues with deletions
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing data
        DB::table('users')->truncate();
        DB::table('system_settings')->truncate();
        DB::table('mail_settings')->truncate();
        DB::table('dynamic_pages')->truncate();
        DB::table('about_us')->truncate();
        DB::table('bottom_banners')->truncate();
        DB::table('our_teams')->truncate();
        DB::table('hero_sections')->truncate();
        DB::table('main_place_sliders')->truncate();
        DB::table('services')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Call seeders
        $this->call([
            UserSeeder::class,
            SystemSettingSeeder::class,
            MailSettingSeeder::class,
            DynamicPageSeeder::class,
            AboutUsSeeder::class,
            BottomBannerSeeder::class,
            OurTeamSeeder::class,
            HeroSectionSeeder::class,
            PlaceSliderSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
