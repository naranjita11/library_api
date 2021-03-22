<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ["name", "image_name", "image_path", "bio", "quotes"];

    public function book()
    {
        
    }

}


