<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeTagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'attribute_name' => $this->attribute_name,
            'definition' => $this->definition,
            'prefix' => $this->prefix,
            'data_type' => $this->data_type,
            'balance_type' => $this->balance_type,
            'period_type' => $this->period_type,
        ];
    }
}
