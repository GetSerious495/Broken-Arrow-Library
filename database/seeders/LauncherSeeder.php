<?php

namespace Database\Seeders;

use App\Models\Launcher;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LauncherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $launchers = Weapon::create([
            'weapons_name' => 'RPG-7V',
            'weapons_damage' => 8.5,
            'weapons_range' => 400,
            'weapons_penetrate' => 500,
            'weapons_reload' => 6,
            'weapons_supply' => 30
        ]);

        Launcher::create([
            'weapon_id' => $launchers->id,
            'launchers_supply_time' => 5,
            'launchers_intercept' => true,
            'launchers_lowalt_range' => 150
        ]);
    }
}
