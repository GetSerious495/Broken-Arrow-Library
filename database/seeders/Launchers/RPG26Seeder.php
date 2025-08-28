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
                    'weapons_name' => 'RPG-26',
                    'weapons_ammo_name' => '73nmm HEAT',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 10,
                    'weapons_damage' => 7.5,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 400,
                    'weapons_penetrate_min' => 450,
                    'weapons_penetrate_max' => 450,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_RPG26_png.png'
                ],
                'launcher' => [
                    'weapons_dispersion_x' => 4,
                    'weapons_dispersion_y' => 4,
                    'launchers_supply_time' => 5,
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
