<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'íd' => $this->id,
            'name' => $this->name,
            'phone' => $this->name,
            'insurance' => $this->insurance,
            'created_at' => $this->created_at,
        ];
    }
}
