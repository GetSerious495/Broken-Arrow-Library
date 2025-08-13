<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Launcher extends Model
{
    protected $fillable = ['launchers_supply_time', 'launchers_intercept', 'launchers_lowalt_range'];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
