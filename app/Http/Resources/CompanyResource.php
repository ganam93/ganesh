<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\API_Models\Contact;
use App\API_Models\Sensor;


class CompanyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'company_id' => $this->id,
            'company_name' => $this->cname,
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
            'contact' => ContactResource :: collection(Contact::where('company_id', $this->id)
                ->where('branch_id', 0)
                ->get()),
            'branch' => BranchResource :: collection($this->branch),
            'sensor' => SensorResource :: collection($this->sensor),
            'idcard' => IdcardResource :: collection($this->idcard)

        ];
    }
}
