<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sniper extends Model
{
    protected $table = 'sniper_rifle';

    protected $fillable = ['weapons_dispersion_x', 'weapons_dispersion_y', 'weapons_mag_size','weapons_ignore_cover'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
