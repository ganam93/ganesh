<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function branch()
    {
        return $this->hasMany(Branch::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

}
