<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(['key' => 'site_name', 'value' => 'ISVA-Innov']);
        Setting::create(['key' => 'slogan', 'value' => "L'excellence en Audit et Expertise Comptable au cœur de la RDC."]);
        Setting::create(['key' => 'logo', 'value' => '']);
        Setting::create(['key' => 'address', 'value' => 'Bukavu, RD Congo']);
        Setting::create(['key' => 'email', 'value' => 'contact@isva-innov.com']);
        Setting::create(['key' => 'phone', 'value' => '+243 978 654 321']);
        Setting::create(['key' => 'twitter_url', 'value' => '#']);
        Setting::create(['key' => 'facebook_url', 'value' => '#']);
        Setting::create(['key' => 'linkedin_url', 'value' => '#']);
        Setting::create(['key' => 'feature_image', 'value' => '']);
    }
}
