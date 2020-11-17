<?php

namespace Database\Seeders;

use App\Models\License;
use Illuminate\Database\Seeder;

class LicensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        License::create([
            'name' => 'Loisir',
            'price' => 20,
            'duration' => 12,
            'enum' => 'month'
        ]);

        License::create([
            'name' => 'Compétition',
            'price' => 40,
            'duration' => 12,
            'enum' => 'month'
        ]);

        License::create([
            'name' => 'Dirigeant',
            'price' => 50,
            'duration' => 12,
            'enum' => 'month'
        ]);

        License::create([
            'name' => 'Sans-emploi',
            'price' => 10,
            'duration' => 12,
            'enum' => 'month'
        ]);

        License::create([
            'name' => 'Famille',
            'price' => 40,
            'duration' => 12,
            'enum' => 'month'
        ]);
    }
}
