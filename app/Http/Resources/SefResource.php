<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SefResource extends JsonResource
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
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Firma: ' => $this->resource->firma,
            'Specijalnost: ' => $this->resource->specijalnost,
            'Gradilište: ' => new GradilisteResource($this->resource->gradiliste)
        ];
    }
}
