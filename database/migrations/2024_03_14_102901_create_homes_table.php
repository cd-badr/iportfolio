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
        Schema::create('homes', function (Blueprint $table) {
            {
                $table->id();
                $table->string("name");
                $table->integer("age");
                $table->string("birthday");
                $table->string("website");
                $table->integer("phone");
                $table->string("city");
                $table->string("degree");
                $table->string("email");
                $table->boolean("freelance");
                $table->timestamps();

            };

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
