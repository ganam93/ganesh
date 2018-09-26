<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branches::class);
    }
}
