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
            "book_id" => $this->book_id,
            "title" => $this->title,
            "author_name" =>$this->author->name,
            "synopsis" => $this->synopsis,
            "image_name" => $this->image_name,
            "image_path" => $this->image_path,
            "publication_date" => $this->publication_date,
            "pages" => $this->pages,
            "rrp" => $this->rrp
        ];
    }
}
