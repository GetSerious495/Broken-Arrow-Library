<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MG extends Model
{
    protected $table = 'machine_gun';

    protected $fillable = ['weapons_dispersion_x', 'weapons_dispersion_y', 'weapons_mag_size', 'stop_to_fire'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
