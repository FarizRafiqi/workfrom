<?php

use App\Models\Room;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(Room::class)->constrained()->restrictOnDelete();
            $table->date('visit_date');
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->dateTime('order_date');
            $table->integer('duration')->nullable(); // 1 - 24++ bulan
            $table->decimal('total_price', 10, 0);
            $table->text('note')->nullable();
            $table->enum('status', ['pending', 'success', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
