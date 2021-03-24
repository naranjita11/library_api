<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable = ["name", "image_name", "image_path", "bio", "quotes"];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function setQuotes($strings)
    {
        $quotes = Quote::fromStrings($strings, $this->id);

    }

}


