<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'branch_id' => $this->id,
            'addr_line1'=> $this->addr_line1,
            'addr_line2'=> $this->addr_line2,
            'city'=> $this->city,
            'country'=> $this->country,
            'zipcode'=> $this->zipcode,
            'contact' => ContactResource :: collection($this->contact)
        ];
    }
}
