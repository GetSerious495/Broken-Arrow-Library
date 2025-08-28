<?php

namespace Database\Seeders;


use App\Models\Weapon;
use App\Models\Sniper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SniperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'ASVK',
                    'weapons_ammo_name' => '7.62x54mm',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 7,
                    'weapons_reload' => 4,
                    'weapons_damage' => 4.3,
                    'weapons_damage_type' => 'Kinetic',
                    'weapons_range' => 1200,
                    'weapons_penetrate_min' => 20,
                    'weapons_penetrate_max' => 40,
                    'weapons_supply' => 0.4,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_ASVK_png.png'
                ],
                'sniper' => [
                    'weapons_dispersion_x' => 2,
                    'weapons_dispersion_y' => 2,
                    'weapons_mag_size' => 10,
                    'weapons_ignore_cover' => 1.0,
                    'stop_to_fire' => true
                ]
            ]
        ];


        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            Sniper::create(array_merge($weaponData['sniper'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
