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
                    'weapons_name' => 'RPG-29',
                    'weapons_ammo_name' => '105mm HEAT',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 6,
                    'weapons_damage' => 9,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 600,
                    'weapons_penetrate_min' => 650,
                    'weapons_penetrate_max' => 650,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => false,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_RPG29_png.png'
                ],
                'launcher' => [
                    'weapons_dispersion_x' => 4,
                    'weapons_dispersion_y' => 4,
                    'launchers_supply_time' => 5,
                    'launchers_intercept' => true,
                    'launchers_lowalt_range' => 150,
                    'weapons_blast_radius' => null
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
