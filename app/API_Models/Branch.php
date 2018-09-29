<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;
use App\API_Models\Contact;

class Branch extends Model
{

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function sensor()
    {
        return $this->hasMany(Sensor::class);
    }

    public function idcard()
    {
        return $this->hasMany(Idcard::class);
    }
    
    public function visitor()
    {
        return $this->hasMany(Visitor::class);
    }
}
