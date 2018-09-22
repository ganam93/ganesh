<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SensorResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'company'-> CompanyResource :: collection($this->company),

            'manufacturer' => $this->manufacturer,
            'model'=> $this->model,
            'location'=> $this->location,
            'company_id'=> $this->company_id,
            'branch_id'=> $this->branch_id  
        ];    
    }
}
