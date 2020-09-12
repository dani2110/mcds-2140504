<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder


{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
        	'name'        => 'Xbox Serie X',
        	'description' => 'Nueva consola de Microsoft para la siguiente generacion',
        	'created_at'  => now(),
        ]);
          DB::table('categories')->insert([
        	'name'        => 'Nintendo Switch',
        	'description' => 'consola Hibrida de Nintendo',
        	'created_at'  => now(),
        ]);

          $cat = new Category;
          $cat->name ='Play Station 5';
          $cat->description ='Nueva consola de PlayStation para la siguiente generacion';
          $cat->save();

    }
}
