<?php

namespace Modules\Partners\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Partners\Entities\Partner;

class PartnersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i <= 40 ; $i++) {
            $data = sprintf("%03d", $i);
            $partner = Partner::create([
                'name' => 'partner '. $data,
            ]);
            // add logo image
            $partner->addMedia(__DIR__ . '/partners/' . $data . '.png')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }

    }
}
