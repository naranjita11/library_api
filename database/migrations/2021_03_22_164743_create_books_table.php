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
            $table->foreignId("author_id")->constrained()->onDelete("cascade");
            $table->timestamps();
            $table->string("title");
            $table->text("synopsis");
            $table->string("image_name");
            $table->string("image_path");
            $table->integer("pages");
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
