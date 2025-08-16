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
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'RPG-7V',
                    'weapons_ammo_name' => 'PG-7VL',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 6,
                    'weapons_damage' => 8.5,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 400,
                    'weapons_penetrate_min' => 400,
                    'weapons_penetrate_max' => 400,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => false,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_RPG7L_png.png'
                ],
                'launcher' => [
                    'launchers_supply_time' => 2,
                    'launchers_intercept' => true,
                    'launchers_lowalt_range' => 150
                ]
            ]
        ];

        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            Launcher::create(array_merge($weaponData['launcher'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
