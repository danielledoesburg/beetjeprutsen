<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Unit dummy data.
     */
    private array $unitData = [
        [
            'name_singular' => 'gram',
            'name_plural' => null,
        ],
        [
            'name_singular' => 'kilo',
            'name_plural' => null,
        ],
        [
            'name_singular' => 'liter',
            'name_plural' => null,
        ],
        [
            'name_singular' => 'milliliter',
            'name_plural' => null,
        ],
        [
            'name_singular' => 'eetlepel',
            'name_plural' => 'eetlepels',
        ],
        [
            'name_singular' => 'theelepel',
            'name_plural' => 'theelepels',
        ],
        [
            'name_singular' => 'stuk',
            'name_plural' => 'stuks',
        ],
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->unitData as $unit) {
            DB::table('units')->insert($unit);
        }
    }
}
