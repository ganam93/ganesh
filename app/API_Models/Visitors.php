<?php

namespace App;
namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    public function visitors()
    {
        $primaryKey = 'id';
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function branch()
    {
        return $this->hasMany(Branches::class);
    }
}
