<?php

namespace Modules\News\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\News\Entities\News;

class NewsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
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
            ],
            [
                'title:en' => 'Child Protection and Development',
                'title:ar' => 'الحماية الأطفال والتنمية',
                'content:en' => 'A.P.E. launched a literacy program in 1989 in a small apartment in Moqattam. This small beginning has grown to include a nursery',
                'content:ar' => 'قامت جمعية حماية البيئة من التلوث A.P.E بإطلاق برنامج محو الأمية في عام 1989 وكانت البداية في شقة صغيرة في حي المقطم.',
            ]
        ];

        foreach ($news as $value) {
            $news = News::create($value);
            // add image
            $news->addMedia(__DIR__ . '/images/slider-' . rand(1, 4) . '.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }
    }
}
