<?php

use App\Models\Building;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Building::class)
                    ->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->decimal('size', 10);
            $table->integer('capacity');
            $table->decimal('price', 10, 0);
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('description')->nullable();
            $table->json('opening_hours')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
