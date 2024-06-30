<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'logo',
        'favicon',
        'loginLogo',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $titles = [
            'theme' => 'dark',
            'email' => 'info@hojuzaty-eg.com',
            'phone' => '01005062221',
            'mobile' => '01097099010',
            'whats_app' => '01005062221',
            'fax' => '(+202) 23417149',
            'name:en' => 'Hojuzaty',
            'name:ar' => 'حجوزاتي',
            'description:en' => 'Hojuzaty',
            'description:ar' => 'حجوزاتي',
            'meta_description:en' => 'Hojuzaty',
            'meta_description:ar' => 'حجوزاتي',
            'facebook' => 'https://www.facebook.com/hojuzaty',
            'twitter' => 'https://www.twitter.com/hojuzaty',
            'instagram' => 'https://www.instagram.com/hojuzaty.eg',
            'youtube' => 'https://www.youtube.com/channel/UCf_AG88Ta8AU8AHE_Mj_fdg',
            'linkedin' => 'https://www.linkedin.com/hojuzaty',

        ];

        foreach ($titles as $key => $value) {
            Settings::set($key, $value);
        }



        // images
        foreach ($this->files as $file) {
            Settings::set($file)->addMedia(__DIR__ . '/images/' . $file . '.png')
                ->preservingOriginal()
                ->toMediaCollection($file);
        }
    }
}
