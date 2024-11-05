<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductUserResource extends JsonResource
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
          'userName' => $this->user->name,
          'userId' => $this->user_id,
          'name' => 'Nama Produk: ' . $this->name,
          'desc' => $this->desc,
          'price' => 'Rp' . number_format($this->price, 0, ',', '.'),
          'posted' => date('d F Y', strtotime($this->posted)),
        ];
    }
}
