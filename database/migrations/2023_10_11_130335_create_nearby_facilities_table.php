<?php

use App\Models\Building;
use App\Models\Facility;
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
        Schema::create('nearby_facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Building::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Facility::class);
            $table->string('distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nearby_facilities');
    }
};
