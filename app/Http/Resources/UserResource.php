<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $role = $this->roles;
        return[
            'id' => $this->id,
            'username'=> $this->username,
            'company_id'=> $this->company_id,
            'branch_id'=> $this->branch_id,
            'role' => $role[0]
        ];
    }
}
