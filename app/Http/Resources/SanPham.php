<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SanPham extends JsonResource
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
            'ten_sp' => $this->name,
            'mo_ta' => $this->slug,
            'chi_tiet' => $this->description,
            'gia' => $this->price,
            'anh' => $this->image,
            'id_dm' => $this->category_id,
            'cap_nhat' => $this->created_at->format('d/m/Y')
        ];
    }
}
