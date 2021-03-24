<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\QuoteResource;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function randomQuote()
    {
        return new QuoteResource(Quote::inRandomOrder()->first());
    }
}
