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
                    'weapons_name' => 'SPG-9M (PG-9V)',
                    'weapons_ammo_name' => 'PG-9V',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 3,
                    'weapons_reload' => 5,
                    'weapons_damage' => 7,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 1000,
                    'weapons_penetrate_min' => 300,
                    'weapons_penetrate_max' => 300,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_SPG9_png.png'
                ],
                'launcher' => [
                    'weapons_dispersion_x' => 5,
                    'weapons_dispersion_y' => 6,
                    'launchers_supply_time' => 5,
                    'launchers_intercept' => true,
                    'launchers_lowalt_range' => 0
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
