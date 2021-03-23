<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ["synopsis", "author", "image_name", "image_path", "title", "type", "genre", "binding", "pages", "publisher", "publication_date", "rrp"];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
