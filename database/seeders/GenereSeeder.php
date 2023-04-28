<?php

namespace Database\Seeders;

use App\Models\Genere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Fantasi', 'Romanzo', 'Azione', 'Spazio', 'Design', 'Scienza'];

        foreach ($types as $type_name) {
            $new_type = new Genere();
            $new_type->name = $type_name;
            $new_type->save();
        }
    }
}
