<?php

namespace Modules\Sliders\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Sliders\Entities\Slider;

class SlidersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                "title:en" => "Slider 1",
                "title:ar" => "السلايدر 1",
                "content:en" => "Slider 1 content",
                "content:ar" => "وصف السلايدر 1",
            ],
            [
                "title:en" => "Slider 2",
                "title:ar" => "السلايدر 2",
                "content:en" => "Slider 2 content",
                "content:ar" => "وصف السلايدر 2",
            ],
            [
                "title:en" => "Slider 3",
                "title:ar" => "السلايدر 3",
                "content:en" => "Slider 3 content",
                "content:ar" => "وصف السلايدر 3",
            ],
            [
                "title:en" => "Slider 4",
                "title:ar" => "السلايدر 4",
                "content:en" => "Slider 4 content",
                "content:ar" => "وصف السلايدر 4",

            ]
        ];

        foreach ($sliders as $i => $value) {
            $sliders = Slider::create($value);
            // add image
            $sliders->addMedia(__DIR__ . '/images/slider-' . ($i + 1) . '.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }
    }
}
