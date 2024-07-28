<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $game = new Game;
        $game->title = 'Super Mario Odyssey';
        $game->developer = 'Nintendo EPD';
        $game->releasedate = '2017-10-27';
        $game->category_id = 1;
        $game->user_id = 1;
        $game->price = 59.99;
        $game->genre = 'Adventure';
        $game->description = 'Super Mario Odyssey is a platform game developed and published by Nintendo for the Nintendo Switch. An installment in the Super Mario series, the story follows Mario as he embarks on a globe-trotting journey to save Princess Peach from Bowser\'s wedding plans.';
        $game->save();

        $game = new Game;
        $game->title = 'Red Dead Redemption 2';
        $game->developer = 'Rockstar Studios';
        $game->releasedate = '2018-10-26';
        $game->category_id = 2;
        $game->user_id = 1;
        $game->price = 59.99;
        $game->genre = 'Action';
        $game->description = 'Animal Crossing: New Horizons is a life simulation video game developed and published by Nintendo for the Nintendo Switch. It is the fifth main series title in the Animal Crossing series. The game was released on March 20, 2020.';
        $game->save();

        $game = new Game;
        $game->title = 'God of War Ragnarok';
        $game->developer = 'Santa Monica Studio';
        $game->releasedate = '2022-11-09';
        $game->category_id = 3;
        $game->user_id = 1;
        $game->price = 70.00;
        $game->genre = 'Action';
        $game->description = 'God of War is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. Released on April 20, 2018, for the PlayStation 4 console, it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010\'s God of War III.';
        $game->save();

    }
}