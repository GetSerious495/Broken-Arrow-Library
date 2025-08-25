<?php


namespace Database\Seeders;

use App\Models\MG;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'base' => [
                    'weapons_name' => 'PKP PBS',
                    'weapons_ammo_name' => '7.62x54mm',
                    'weapons_trajectory' => 'Direct shot',
                    'weapons_aim_time' => 2,
                    'weapons_reload' => 4,
                    'weapons_damage' => 1.8,
                    'weapons_damage_type' => 'Kinetic',
                    'weapons_range' => 600,
                    'weapons_penetrate_min' => 10,
                    'weapons_penetrate_max' => 20,
                    'weapons_supply' => 0.1,
                    'weapons_target_inf' => true,
                    'weapons_target_vehicle' => true,
                    'weapons_target_heli' => true,
                    'image' => 'weapons/INF_PKP_png.png'
                ],
                'MG' => [
                    'weapons_dispersion_x' => 4.6,
                    'weapons_dispersion_y' => 9.2,
                    'weapons_mag_size' => 30,
                    'stop_to_fire' => true
                ]
            ]
        ];


        foreach ($weapons as $weaponData) {
            $weapon = Weapon::create($weaponData['base']);
            MG::create(array_merge($weaponData['MG'], [
                'weapon_id' => $weapon->id
            ]));
        }
    }
}
