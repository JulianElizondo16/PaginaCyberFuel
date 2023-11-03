<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('extract');
            $table->longText('body');
            //Con el enum se puede decir que numeros puede tener ese campo.
            //En este caso estamos diciendo que los valores son 1 y 2 y que por default sea 1
            $table->enum('status',[1, 2])->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            //Ahora a esos campos se les va a agregar una restriccion de Foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
