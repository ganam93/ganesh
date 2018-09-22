<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VisitorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'id_card'=> $this->id_card,
            'name'=> $this->name,
            'contact'=> $this->contact,
            'check_in'=> $this->check_in,
            'check_out'=> $this->check_out,
            'company_id' => $this->company_id,
            'Branch_id' => $this->Branch_id
        ];
    }
}
