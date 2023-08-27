<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data'  => $this->resource,
            'links' => [
                'self' => route('api.v1.hospital.show', [$this->resource->id]),
                'all'  => route('api.v1.hospital.index'),
            ],
        ];
    }
}
