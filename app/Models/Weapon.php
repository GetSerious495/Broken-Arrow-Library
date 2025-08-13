<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $table = 'test_table';

    public function launchers()
    {
        return $this->hasMany(Launcher::class, 'weapon_id');
    }
}
