<?php

namespace Database\Seeders;

use App\Models\Napalm;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NapalmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'MRO-Z',
                    'weapons_ammo_name' => '73nmm Incenediary',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 8,
                    'weapons_damage' => 10,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 450,
                    'weapons_penetrate_min' => 15,
                    'weapons_penetrate_max' => 15,
                    'weapons_supply' => 30.0,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => false,
                    'weapons_target_heli' => false,
                    'image' => 'weapons/INF_RPG26_png.png'
                ],
                'napalm' => [
                    'weapons_dispersion_x' => 4,
                    'weapons_dispersion_y' => 4,
                    'launchers_supply_time' => 5,
                    'launchers_intercept' => true,
                    'weapons_blast_radius' => 50,
                    'weapons_ignore_cover' => 1.0,
                    'weapons_top_damage' => true,
                    'weapons_napalm' => true
                ]
            ]
        ];

        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            Napalm::create(array_merge($weaponData['napalm'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
