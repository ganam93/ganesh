<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'contact_id' => $this->id,
            'name' => $this->name,
            'designation' => $this->designation,
            'mobile_no' => $this->mobile_no,
            'landline_no'=> $this->landline_no,
            'email'=> $this->email
        ];
    }
}
