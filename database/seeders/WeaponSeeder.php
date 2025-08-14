<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weapon::create([
            'weapons_name' => 'AK-74RMO',
            'weapons_ammo_name'=> '5.45x39mm',
            'weapons_trajectory' => 'Direct shot',
            'weapons_aim_time' => 1,
            'weapons_reload' => 4,
            'weapons_damage' => 1.2,
            'weapons_damage_type' => 'Kinetic',
            'weapons_range' => 400,
            'weapons_penetrate_min' => 5,
            'weapons_penetrate_max' => 15,
            'weapons_supply' => 0.1,
            'weapons_target_ground' => true,
            'weapons_target_vehicle' => true,
            'weapons_target_heli' => true
        ]);
    }
}
