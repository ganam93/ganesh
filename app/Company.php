<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\API\Contact;

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
