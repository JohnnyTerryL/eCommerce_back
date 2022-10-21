<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ProductResource extends JsonResource
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
            'code'=> Str::of($this->code)->upper(),
            'name'=> $this->name,
            'price'=> $this->price,
            'category_id' => $this->category_id,
            'category_name' => Category::select('name')->where('id', $this->category_id)->first()->name,
            'description' => $this->description,
            'stock' => $this->stock,
            'created_at' => $this->created_at->format('d-m-Y'),
            'updated_at' => $this->updated_at->format('d-m-Y')
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
        ];
    }
}
