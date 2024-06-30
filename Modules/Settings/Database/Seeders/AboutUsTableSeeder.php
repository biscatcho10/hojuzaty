<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Settings\Entities\AboutUs;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create or update about us
        $about = AboutUs::updateOrCreate(
            ['id' => 1],
            [
                "about_us_title" => "Creativity...Elegance...Excellence",
                "about_us_sub_title" => "This is what we offer to our clients in SGA.",
                "about_us_desc" => "SGA a team full of experience and creativity that brands and products marketing, exhibition and any type of social media channels. With our team's excess of experince and knowledgein this fiels we can offer our clients nothing but excellency and perfection in the way we excute their ideas.",
                "our_vision" => "In SGA, we believe in the importance of strengthening our relationship with our clients to convoy their ideas in an attractive and creative way to become the main source of success to their events.",
                "our_mission" => "In SGA, we care about the quality of our work because it is our sole purpose in our field, and we emphasize the importance of providing support and assistance to our clients in a professional manner starting from the brainstorming phase untill we excute our excellence in the ground.",
                "our_tasks" => "Is to become a role model for others in the field through our creativity and the quality of our work and this comes with having everything for whitch any client is looking for to provide them with all the love and pride on top of our professionalism.",
                "address" => "Villa 10 in front of Gate 4 AUC, 5th Settlement, New Cairo",
            ]
        );

    }
}
