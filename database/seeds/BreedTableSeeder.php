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
        // for ($i=0 ; $i<5 ; $i++) {
        // 	$data = [
        // 		'name' => 'Breed'.$i
        // 	];
        // 	Breed::create($data);
        // }

        factory(App\Breed::class, 10)->create();
    }
}
