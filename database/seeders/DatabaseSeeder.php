<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Downtime;
use App\Models\User;
use Faker\Provider\kk_KZ\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Downtime::query()->create([
       	'downtime'=>Carbon::now(),
		 'device_id'=>1
	   ]);
		
    }
}
