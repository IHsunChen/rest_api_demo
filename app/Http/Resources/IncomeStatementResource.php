<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncomeStatementResource extends JsonResource
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
            'company_name' => $this->company_name,
            'ticker' => $this->ticker,
            'cik' => $this->cik,
            'access_number' => $this->access_number,
            'attribute' => $this->attribute,
            'label' => $this->label,
            'value' => $this->value,
            'period_ending' => $this->period_ending,
            'file_date' => $this->file_date,
            'form_type' => $this->form_type,
        ];
    }
}
