<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0 ; $i<10 ; $i++) {
        	$data = [
        		'name' => 'Cat'.$i,
        		'breed_id' => rand(1,5),
        		'dob' => now()
        	];
        	Cat::create($data);
        }
    }
}
