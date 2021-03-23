<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignID("author_id");
            $table->timestamps();
            $table->string("title");
            $table->text("synopsis");
            $table->string("image_name");
            $table->string("image_path");
            $table->string("author");
            $table->enum("genre", ["crime", "nature", "cooking", "fantasy", "sci-fi", "philosophy", "science", "modern", "programming", "art", "design"]);
            $table->enum("type", ["fiction", "non-fiction"]);
            $table->string("binding");
            $table->integer("pages");
            $table->string("publisher");
            $table->date("publication_date");
            $table->string("rrp");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
