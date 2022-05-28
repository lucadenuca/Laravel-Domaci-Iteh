<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GradilisteResource extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Adresa: ' => $this->resource->adresa,
            'Grad: ' => $this->resource->grad,
            'Investitor: ' => $this->resource->investitor,
            'Broj radnika: ' => $this->resource->broj_radnika
        ];
    }
}
