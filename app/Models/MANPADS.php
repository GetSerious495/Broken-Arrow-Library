<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MANPADS extends Model
{
    protected $table = 'guided_launchers_aa';

    protected $fillable = ['weapons_guidance_type', 'launchers_supply_time', 'launchers_lowalt_range_min','launchers_lowalt_range_max','launchers_highalt_range_min','launchers_highalt_range_max','AA_target_aircraft','AA_target_missile','launchers_max_speed'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
