<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\API_Models\Visitor;

class VisitorResource extends JsonResource
{
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
            'branch_id' => $this->branch_id
        ];
    }
}
