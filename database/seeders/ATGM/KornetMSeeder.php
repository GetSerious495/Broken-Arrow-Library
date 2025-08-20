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
                    'weapons_name' => 'Kornet-M',
                    'weapons_ammo_name' => '9M113M-2',
                    'weapons_trajectory' => 'Missile',
                    'weapons_aim_time' => 3,
                    'weapons_reload' => 5,
                    'weapons_damage' => 13,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 1800,
                    'weapons_penetrate_min' => 1200,
                    'weapons_penetrate_max' => 1200,
                    'weapons_supply' => 75.0,
                    'weapons_target_inf' => false,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_KORNET_png.png'
                ],
                'ATGM' => [
                    'weapons_guidance_type' => 'Semi-Active',
                    'launchers_supply_time' => 5,
                    'launchers_range_min' => 200,
                    'launchers_intercept' => true,
                    'launchers_max_speed' => 720,
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
