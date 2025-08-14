<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rifle extends Model
{
    protected $fillable = ['weapons_dispersion_x', 'weapons_dispersion_y', 'weapons_mag_size'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
