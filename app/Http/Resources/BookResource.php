<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'category' => $this->category,
            'author' => $this->author,
            'realease_date' => $this->realease_date->format('d/M/y'),
            'publish_date' => $this->publish_date->format('d/M/y')
        ];
    }
}
