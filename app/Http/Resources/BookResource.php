<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
           "author" => [
                "id" => $this->author->id,
                "name" =>$this->author->name,
           ],
            "book_id" => $this->id,
            "title" => $this->title,
            "synopsis" => $this->synopsis,
            "image_name" => $this->image_name,
            "image_path" => $this->image_path,
            "publication_date" => $this->publication_date,
            "pages" => $this->pages,
            "rrp" => $this->rrp
        ];
    }
}
