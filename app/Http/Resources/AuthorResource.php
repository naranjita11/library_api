<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            "author_id" => $this->author_id,
            "name" => $this->name,
            "bio" => $this->bio,
            "image_name" => $this->image_name,
            "image_path" => $this->image_path,
        ];
    }

}
