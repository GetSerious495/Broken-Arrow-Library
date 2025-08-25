<?php

namespace Database\Seeders;

use App\Models\ATGM;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ATGMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'Metis',
                    'weapons_ammo_name' => '9M115',
                    'weapons_trajectory' => 'Missile',
                    'weapons_aim_time' => 2,
                    'weapons_reload' => 5,
                    'weapons_damage' => 9,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 800,
                    'weapons_penetrate_min' => 550,
                    'weapons_penetrate_max' => 550,
                    'weapons_supply' => 50.0,
                    'weapons_target_inf' => false,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_METIS_png.png'
                ],
                'ATGM' => [
                    'weapons_guidance_type' => 'Semi-Active',
                    'launchers_supply_time' => 5,
                    'launchers_range_min' => 100,
                    'launchers_intercept' => true,
                    'launchers_max_speed' => 435,
                    'stop_to_fire' => true
                ]
            ]
        ];

        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            ATGM::create(array_merge($weaponData['ATGM'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
