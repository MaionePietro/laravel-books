<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $generi_ids=Genere::all()->pluck('id')->all();
        for($i=0;$i<20;$i++){
            $new_book = new Book();
            $new_book->titolo = $faker->word();
            $new_book->genere_id = $faker->randomElement($generi_ids);
            $new_book->numero_copie = $faker->numberBetween(1, 126);
            $new_book->save();
        }
    }
}
