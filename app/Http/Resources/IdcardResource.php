<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdcardResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'major' => $this->major,
            'minor'=> $this->minor,
            'issued_date'=> $this->issued_date,
            'expiry_date'=> $this->expiry_date,
            'company_id'=> $this->company_id,
            'branch_id'=> $this->branch_id ,

        ];    
    }
}
