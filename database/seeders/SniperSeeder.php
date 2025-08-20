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
                    'weapons_name' => 'DVL-10',
                    'weapons_ammo_name' => '.308WIN',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 5,
                    'weapons_reload' => 4,
                    'weapons_damage' => 3.6,
                    'weapons_damage_type' => 'Kinetic',
                    'weapons_range' => 800,
                    'weapons_penetrate_min' => 10,
                    'weapons_penetrate_max' => 20,
                    'weapons_supply' => 0.4,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_DVL10_png.png'
                ],
                'sniper' => [
                    'weapons_dispersion_x' => 1.5,
                    'weapons_dispersion_y' => 1.5,
                    'weapons_mag_size' => 5,
                    'weapons_ignore_cover' => 1.0
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
