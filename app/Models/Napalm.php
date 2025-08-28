<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Napalm extends Model
{
    protected $table = 'napalm_launcher';

    protected $fillable = ['weapons_dispersion_x', 'weapons_dispersion_y', 'launchers_supply_time', 'launchers_intercept','weapons_blast_radius','weapons_ignore_cover','weapons_top_damage','weapons_napalm'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
