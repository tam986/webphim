<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class sanphams extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ten_sp' => $this->ten_sp,
            'gia_sp' => $this->gia,
            'id_loai' => $this->id_loai,
            'cap_nhat' => $this->updated_at->format('d/m/Y')
        ];
    }
}
