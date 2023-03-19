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
        Schema::create('wearon', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('title', 100);
            $table->string('description');
            $table->string('material');
            $table->integer('weight')->unsigned();
            $table->string('image', '250')->default('images/wearon.png');
            $table->string('location');
            $table->string('type');
            $table->text('updated_at');
            $table->text('created_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wearon');
    }
};
