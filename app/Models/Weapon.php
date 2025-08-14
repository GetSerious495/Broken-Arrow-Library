<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $table = 'base_weapons';

    public function launchers()
    {
        return $this->hasMany(Launcher::class, 'weapon_id');
    }

    public function rifles()
    {
        return $this->hasMany(Rifle::class, 'weapon_id');
    }
}
