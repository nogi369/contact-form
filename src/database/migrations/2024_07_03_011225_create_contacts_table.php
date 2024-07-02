<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // $table->unsignedBigInteger('id')->autoIncrement();
    // $table->varchar('name', 255);
    // $table->varchar('email', 255);
    // $table->varchar('tell', 11);
    // $table->timestamp('created_at')->useCurrent()->nullable();
    // $table->timestamp('updated_at')->useCurrent()->nullable();

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email');
          $table->string('tel', 11);
          $table->text('content')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
