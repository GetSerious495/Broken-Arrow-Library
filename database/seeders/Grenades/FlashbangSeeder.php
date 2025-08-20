<?php

namespace Database\Seeders;

use App\Models\Grenade;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrenadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'Flashbang',
                    'weapons_ammo_name' => 'Flashbang',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 6,
                    'weapons_damage' => 0.5,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 2,
                    'weapons_penetrate_min' => 0,
                    'weapons_penetrate_max' => 0,
                    'weapons_supply' => 16.0,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/FLASHBANG_png.png'
                ],
                'launcher' => [
                    'weapons_dispersion_x' => 0,
                    'weapons_dispersion_y' => 0,
                    'launchers_supply_time' => 2.5,
                    'autoloader' => true
                ]
            ]
        ];

        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            Grenade::create(array_merge($weaponData['launcher'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
