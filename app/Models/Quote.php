<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ["quote_text", "author_id"];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public static function fromStrings(array $strings, int $author_id)
    {
        //map to remove whitespace from strings,
        //make sure there are no duplicates with unique(),
        //firstOrCreate to match or create new quote if not in DB
        //should return collection of quotes from DB
        return collect($strings)
            ->map(fn($str) => trim($str))
            ->unique()
            ->map(fn($str) => Quote::create(["quote_text" => $str, "author_id" => $author_id]));
    }

    
}
