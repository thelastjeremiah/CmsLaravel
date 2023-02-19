<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blogs', function (Blueprint $table) {
      $table->id();
      $table->string('image');
      $table->string('title');
      $table->string('author');
      $table->longText('message');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   * php artisan migrate:refresh --path=/database/migrations/2022_09_03_093847_create_blogs_table.php
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('blogs');
  }
};
