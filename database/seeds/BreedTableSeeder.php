<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cách 1
        // for ($i=0 ; $i<5 ; $i++) {
        // 	$data = [
        // 		'name' => 'Breed'.$i
        // 	];
        // 	Breed::create($data);
        // }

        //cách 2 
        factory(App\Breed::class, 10)->create();
    }
}
