<?php

namespace Database\Seeders;

use App\Models\GL;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'AGS-40',
                    'weapons_ammo_name' => '40mm Grenades',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 2,
                    'weapons_reload' => 10,
                    'weapons_damage' => 2,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 800,
                    'weapons_penetrate_min' => 40,
                    'weapons_penetrate_max' => 40,
                    'weapons_supply' => 2,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_AGS40_png.png'
                ],
                'GL' => [
                    'weapons_dispersion_x' => 10,
                    'weapons_dispersion_y' => 40,
                    'weapons_blast_radius' => 20,
                    'stop_to_fire' => true
                ]
            ]
        ];


        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            GL::create(array_merge($weaponData['GL'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
