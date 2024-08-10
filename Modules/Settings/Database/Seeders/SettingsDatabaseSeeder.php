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
            'call_center' => '(+202) 23417149',
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
            'why_chosse_us:ar' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'why_chosse_us:en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            
            'why_chosse_us:ar' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            
            'our_vision:ar' => "• Become the first choice in travel planning, due to our focus on creating value and providing educational insight.

                             • Consistently create a collaborative relationship with our clients, that allows for them to fully trust our selections knowing that we genuinely have their best interests in mind.",
            'our_vision:en' => "• Become the first choice in travel planning, due to our focus on creating value and providing educational insight.

                             • Consistently create a collaborative relationship with our clients, that allows for them to fully trust our selections knowing that we genuinely have their best interests in mind.",
            'our_mission:ar' => "• Create life-long clients through perfectly planned itineraries customized to client style.

                              • Be an advocate for local cultures and empowering clients to respect their hosting destinations.

                              • Cultivate collaborative relationships of mutual benefit and respect between travel designers and clients.",
            'our_mission:en' => "• Create life-long clients through perfectly planned itineraries customized to client style.

                              • Be an advocate for local cultures and empowering clients to respect their hosting destinations.

                              • Cultivate collaborative relationships of mutual benefit and respect between travel designers and clients.",

            'contact_us_desc:en' => "We are here to help you with any questions you may have. Please feel free to contact us and we will get back to you as soon as possible.",
            'contact_us_desc:ar' => "We are here to help you with any questions you may have. Please feel free to contact us and we will get back to you as soon as possible.",
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
