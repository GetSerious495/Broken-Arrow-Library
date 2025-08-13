<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weapon::create([
            'weapons_name' => 'M4A1',
            'weapons_damage' => 1.2,
            'weapons_range' => 400,
            'weapons_penetrate' => 15,
            'weapons_reload' => 4, 
            'weapons_supply' => 0.1
        ]);
    }
}
