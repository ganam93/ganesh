<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function contact()
    {
        return $this->hasMany(API/Contact::class);
    }
    
}
