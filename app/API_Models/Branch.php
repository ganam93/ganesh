<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
