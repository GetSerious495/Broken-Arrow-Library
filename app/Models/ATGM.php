<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ATGM extends Model
{
    protected $table = 'guided_launchers_at';

    protected $fillable = ['weapons_guidance_type', 'launchers_supply_time', 'launchers_range_min', 'launchers_intercept', 'launchers_max_speed','stop_to_fire'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
