<?php

namespace Modules\Destinations\Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Modules\Destinations\Entities\Destination;

class DestinationsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        for ($i = 0; $i < 10; $i++) {
            $destination = Destination::create([
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach (['en', 'ar'] as $locale) {
                $destination->translateOrNew($locale)->name = $faker->state;
                $destination->translateOrNew($locale)->description = $faker->paragraph;
            }

            $destination->save();

            // destination image
            $destination->addMedia(__DIR__ . '/images/slider-' . rand(1, 4) . '.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');

            // destination covers and gallery
            for ($k = 1; $k <= 4; $k++) {
                $destination->addMedia(__DIR__ . '/images/slider-' . $k . '.jpg')
                ->preservingOriginal()
                ->toMediaCollection('covers');

                $destination->addMedia(__DIR__ . '/images/slider-' . $k . '.jpg')
                ->preservingOriginal()
                ->toMediaCollection('gallery');
            }

            // destination places
            for ($n = 1; $n <= 4; $n++) {
                $place = $destination->places()->create([
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                foreach (['en', 'ar'] as $locale) {
                    $place->translateOrNew($locale)->name = $faker->city;
                    $place->translateOrNew($locale)->description = $faker->paragraph;
                }

                // destination place images
                $place->addMedia(__DIR__ . '/images/slider-' . rand(1, 4) . '.jpg')
                    ->preservingOriginal()
                    ->toMediaCollection('images');

                $place->save();
            }

            // destination bookings
            for ($j = 0; $j < 5; $j++) {
                $checkIn = $faker->dateTimeBetween('now', '+1 years')->format('Y-m-d');
                $checkOut = $faker->dateTimeBetween($checkIn, '+1 years')->format('Y-m-d');
                $days = (strtotime($checkOut) - strtotime($checkIn)) / (60 * 60 * 24);
                $destination->bookings()->create([
                    'first_name' => $faker->firstName,
                    'second_name' => $faker->lastName,
                    'email' => $faker->email,
                    'phone' => $faker->phoneNumber,
                    'check_in' => $checkIn,
                    'check_out' => $checkOut,
                    'days' => $days,
                    'message' => $faker->paragraph,
                ]);
            }
        }
    }
}
