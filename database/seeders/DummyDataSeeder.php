<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Accounts\Database\Seeders\UsersTableSeeder;
use Modules\Destinations\Database\Seeders\DestinationsDatabaseSeeder;
use Modules\News\Database\Seeders\NewsDatabaseSeeder;
use Modules\Partners\Database\Seeders\PartnersDatabaseSeeder;
use Modules\Settings\Database\Seeders\ContactusTableSeeder;
use Modules\Settings\Database\Seeders\SettingsDatabaseSeeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsDatabaseSeeder::class);
        $this->call(NewsDatabaseSeeder::class);
        $this->call(ContactusTableSeeder::class);
        $this->call(PartnersDatabaseSeeder::class);
        $this->call(DestinationsDatabaseSeeder::class);
    }
}
