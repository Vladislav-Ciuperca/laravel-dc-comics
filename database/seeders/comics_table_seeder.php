<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\comic;

use Faker\Generator as Faker;

class comics_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 12; $i++) {


            $new_comic = new comic();

            $new_comic->title = $faker->name;
            $new_comic->description = $faker->sentence(90);
            $new_comic->thumb = "https://picsum.photos/id/" . $faker->numberBetween(0, 500) . "/950/600.jpg";
            $new_comic->price = $faker->randomFloat(2, 0.99, 69, 99);
            $new_comic->series = $faker->name;
            $new_comic->sale_date = $faker->date('Y-m-d');
            $new_comic->type = "comic boock";
            $new_comic->artists = $faker->name;
            $new_comic->writers = $faker->name;

            $new_comic->save();
        }
    }
}
