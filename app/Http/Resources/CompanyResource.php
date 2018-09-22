<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'cname' => $this->cname,
            'country' => $this->country,
            'pan' => $this->pan,
            'GST'=> $this->GST,
            'reg_no'=> $this->reg_no,
            'website'=> $this->website,
            'addr_line1'=> $this->addr_line1,
            'addr_line2'=> $this->addr_line2,
            'city'=> $this->city,
            'country'=> $this->country,
            'zipcode'=> $this->zipcode,
            'contact' => $this->contact,
            'branch' => BranchResource :: collection($this->branch)
        ];
    }
}
