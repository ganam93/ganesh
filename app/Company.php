<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
}
