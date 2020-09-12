<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('games')->insert([
        	'name'        => 'Halo Infinite',
        	'description' => 'Juego FPS para nueva generacion',
        	'user_id'     => 1,
        	'category_id' => 1,
        	'price'       => 60,
        	'created_at'  => now()
        ]);

         $game = new Game;
         $game->name        ='Animal Crossin NH';
         $game->description =' Juego de Nintendo Swtich';
         $game->user_id     =1;
         $game->category_id =2;
         $game->price       =50;
         $game-> save();

    }
}
