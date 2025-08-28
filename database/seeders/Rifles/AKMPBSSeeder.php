<?php

namespace Database\Seeders;

use App\Models\Rifle;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RifleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'AKM PBS',
                    'weapons_ammo_name' => '7.62x39mm',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 4,
                    'weapons_damage' => 2,
                    'weapons_damage_type' => 'Kinetic',
                    'weapons_range' => 300,
                    'weapons_penetrate_min' => 4,
                    'weapons_penetrate_max' => 12,
                    'weapons_supply' => 0.1,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_AKM_PBS_png.png'
                ],
                'rifle' => [
                    'weapons_dispersion_x' => 2,
                    'weapons_dispersion_y' => 9,
                    'weapons_mag_size' => 30
                ]
            ]
        ];


        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            Rifle::create(array_merge($weaponData['rifle'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
