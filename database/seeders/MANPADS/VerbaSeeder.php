<?php

namespace Database\Seeders;

use App\Models\Weapon;
use App\Models\MANPADS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MANPADSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'Verba',
                    'weapons_ammo_name' => 'Verba',
                    'weapons_trajectory' => 'Missile',
                    'weapons_aim_time' => 1,
                    'weapons_reload' => 6,
                    'weapons_damage' => 8,
                    'weapons_damage_type' => 'Explosive',
                    'weapons_range' => 2100,
                    'weapons_penetrate_min' => 80,
                    'weapons_penetrate_max' => 80,
                    'weapons_supply' => 50,
                    'weapons_target_inf' => false ,
                    'weapons_target_vehicle' => false,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_VERBA_png.png'
                ],
                'MANPADS' => [
                    'weapons_guidance_type' => 'Fire-and-Forget',
                    'launchers_supply_time' => 5,
                    'launchers_lowalt_range_min' => 200,
                    'launchers_lowalt_range_max' => 2100,
                    'launchers_highalt_range_min' => 200,
                    'launchers_highalt_range_max' => 2100,
                    'AA_target_aircraft' => true,
                    'AA_target_missile' => false,
                    'launchers_max_speed' => 1800
                ]
            ]
        ];


        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            MANPADS::create(array_merge($weaponData['MANPADS'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
