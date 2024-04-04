<?php

namespace BookStore\Api\OrderDetails\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'order_id'  =>  $this->id,
            'book_id'  =>  $this->id,
            'qty'      =>  $this->qty,
            'created_at'  =>  $this->created_at->format('Y-m-d h:i:s'),
            'updated_at'  =>  $this->updated_at->format('Y-m-d h:i:s')
        ];
    }
}