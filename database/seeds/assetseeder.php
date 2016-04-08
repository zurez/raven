<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class assetseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
    		 DB::table('assets')->insert([
	            'site' => $faker->name,
	            'serial_number' => $faker->numberBetween(4,10000),
	            'condition' => $faker->randomElement(array("New","Used")),
	            'asset_type'=> $faker->word,
	            'manufacturer'=> $faker->word,
	            "vendor_number"=> $faker->numberBetween(999999,1999999),
	            "location"=> $faker->randomElement(array("Pennsylvania","Innovation Campus","Upland","Indiana","Marion","Commerce")),
	            "asset_tag"=> $faker->word,
	            "additional_info"=> $faker->sentence,
	            "model"=> $faker->word,
	            "costs"=> $faker->numberBetween(1,100),
	            "warranty_begin"=> $faker->dateTime(),
	            "warranty_ends"=> $faker->dateTime(),
	            "creator"=>$faker->name,
	            "created_at"=>$faker->dateTime()
	        ]);
    	}
	       
    }
}
