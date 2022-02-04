<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class strukaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'struke';
    
    public function toArray($request)
    {
        // return parent::toArray($request)
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'opis' => $this->resource->opis,
            'stepen' => $this->resource->stepen
        ];
    }
}
