<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrcreate([
            'id' => 1,
            'address' => 'Gaza',
            'phone' => '059999999',
            'email' => 'taher@gmail',
            'facebook' => 'https://www.facebook.com/taher',
            'twitter' => 'https://twitter.com/taher',
            'instagram' => 'https://www.instagram.com/taher',
            'linkedin' => 'https://www.linkedin.com/taher',
            'youtube' => 'https://www.youtube.com/taher',
        ]);
    }
}
