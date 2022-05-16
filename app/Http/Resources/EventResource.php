<?php

namespace App\Http\Resources;

use App\Http\Resources\WorkshopResource;
use App\Http\Resources\WorkshopCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'workshops' => WorkshopResource::collection($this->whenLoaded('workshops'))
        ];
    }
}
