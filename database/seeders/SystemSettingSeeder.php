<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemSetting::create([
            'title' => '',
            'system_name' => '',
            'email' => 'info@gmail.com',
            'number' => '7777777777',
            'logo' => null,
            'favicon' => null,
            'address' => null,
            'facebook_link' => null,
            'linkedin_link' => null,
            'copyright_text' => 'Copyright 2025. All Rights Reserved. Powered by .',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }
}
