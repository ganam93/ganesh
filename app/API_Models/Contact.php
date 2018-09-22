<?php

namespace App\API_Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

	protected $fillable = ['name','designation','mobile_no','landline_no','email','company_id','branch_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
