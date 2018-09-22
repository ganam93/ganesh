<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company_id'=>$this->company_id,
            'addr_line1'=> $this->addr_line1,
            'addr_line2'=> $this->addr_line2,
            'city'=> $this->city,
            'state'=>$this->state,
            'country'=> $this->country,
            'zipcode'=> $this->zipcode,
        ];
    }
}
