<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grenade extends Model
{
    protected $table = 'grenades';

    protected $fillable = ['weapons_dispersion_x','weapons_dispersion_y', 'launchers_supply_time', 'autoloader'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
