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
        Schema::create('hinhxe', function (Blueprint $table) {
            $table->Increments('idhinhxe');
            $table->longText('hinhxe')->nullable();
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now())->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hinhxe');
    }
};
