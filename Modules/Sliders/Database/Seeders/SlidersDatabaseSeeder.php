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
                "title:en" => "Child Protection and Development",
                "title:ar" => "الحماية الأطفال والتنمية",
                "content:en" => "A.P.E. launched a literacy program in 1989 in a small apartment in Moqattam. This small beginning has grown to include a nursery",
                "content:ar" => "قامت جمعية حماية البيئة من التلوث A.P.E بإطلاق برنامج محو الأمية في عام 1989 وكانت البداية في شقة صغيرة في حي المقطم.",
            ],
            [
                'title:en' => 'Child Protection and Development',
                'title:ar' => 'الحماية الأطفال والتنمية',
                'content:en' => 'A.P.E. launched a literacy program in 1989 in a small apartment in Moqattam. This small beginning has grown to include a nursery',
                'content:ar' => 'قامت جمعية حماية البيئة من التلوث A.P.E بإطلاق برنامج محو الأمية في عام 1989 وكانت البداية في شقة صغيرة في حي المقطم.',
            ],
            [
                'title:en' => 'Child Protection and Development',
                'title:ar' => 'الحماية الأطفال والتنمية',
                'content:en' => 'A.P.E. launched a literacy program in 1989 in a small apartment in Moqattam. This small beginning has grown to include a nursery',
                'content:ar' => 'قامت جمعية حماية البيئة من التلوث A.P.E بإطلاق برنامج محو الأمية في عام 1989 وكانت البداية في شقة صغيرة في حي المقطم.',
            ]
        ];

        foreach ($sliders as $value) {
            $sliders = Slider::create($value);
            // add image
            $sliders->addMedia(__DIR__ . '/images/slider.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }
    }
}
