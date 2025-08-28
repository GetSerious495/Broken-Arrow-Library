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
                    'weapons_name' => 'RShG-1',
                    'weapons_ammo_name' => 'RShG-1 Thermobaric',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 10,
                    'weapons_damage' => 10.5,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 400,
                    'weapons_penetrate_min' => 105,
                    'weapons_penetrate_max' => 105,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_RPG27_png.png'
                ],
                'launcher' => [
                    'weapons_dispersion_x' => 4,
                    'weapons_dispersion_y' => 4,
                    'launchers_supply_time' => 5,
                    'launchers_intercept' => false,
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
