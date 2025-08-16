<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GL extends Model
{
    protected $table = 'grenade_launchers';

    protected $fillable = ['weapons_dispersion_x', 'weapons_dispersion_y', 'weapons_blast_radius'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
