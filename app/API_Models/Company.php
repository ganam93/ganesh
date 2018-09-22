<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	//protected $fillable = ['cname','pan','GST','reg_no','city','zipcode','addr_line1','addr_line2','country'];

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
}
