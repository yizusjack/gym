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
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->text('name_el');
            $table->text('alias_el')->nullable();
            $table->text('description_el');
            $table->float('value_el', 2, 1);
            $table->char('category_el', 2);
            $table->foreignId('aparatos_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
