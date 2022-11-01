<?php

namespace App\Http\Resources;

use App\Models\Card;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class CardResource extends JsonResource
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
            'id'=> $this->id,
            'card_name' => $this->card_name,
            'card_number' => $this->card_number,
            'card_expiration_date' =>$this->card_expiration_date,
            'card_cvc' => $this-> card_cvc
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
        ];
    }
}
