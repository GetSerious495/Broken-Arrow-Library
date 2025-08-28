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
                    'weapons_name' => 'Konkurs',
                    'weapons_ammo_name' => '9M113',
                    'weapons_trajectory' => 'Missile',
                    'weapons_aim_time' => 3,
                    'weapons_reload' => 5,
                    'weapons_damage' => 10,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 1600,
                    'weapons_penetrate_min' => 650,
                    'weapons_penetrate_max' => 650,
                    'weapons_supply' => 60.0,
                    'weapons_target_inf' => false,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_KONKURS_png.png'
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
