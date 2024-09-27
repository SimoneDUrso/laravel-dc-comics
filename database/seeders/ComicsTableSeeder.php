<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 13; $i++) {
            $comic = new Comic();

            $comic->title = implode(' ', $faker->words(3));
            $comic->thumb = $faker->imageUrl();
            $comic->description = implode(' ', $faker->words(20));
            $comic->price = $faker->randomFloat(2, 5, 50);
            $comic->series = implode(' ', $faker->words(3));
            $comic->sale_date = $faker->date();
            $comic->type = $faker->randomElement(['Graphic Novel', 'Comic Book', 'Manga']);

            $comic->save();
        }
    }
}
