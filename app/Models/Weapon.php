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

    public function GL()
    {
        return $this->hasMany(GL::class, 'weapon_id');
    }

    public function MG()
    {
        return $this->hasMany(MG::class, 'weapon_id');
    }

    public function MANPADS()
    {
        return $this->hasMany(MANPADS::class, 'weapon_id');
    }

    public function ATGM()
    {
        return $this->hasMany(ATGM::class, 'weapon_id');
    }
    
    public function sniper()
    {
        return $this->hasMany(Sniper::class, 'weapon_id');
    }

     public function grenade()
    {
        return $this->hasMany(Grenade::class, 'weapon_id');
    }
}
