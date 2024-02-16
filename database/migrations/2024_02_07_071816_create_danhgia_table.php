<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('danhgia', function (Blueprint $table) {
            $table->Increments('iddanhgia');
            $table->Integer('iduser')->unsigned()->nullable();
            $table->Integer('idxe')->unsigned()->nullable();
            $table->text('mota')->nullable();
            $table->foreign('iduser')->references('iduser')->on('users')->onDelete('cascade');
            $table->foreign('idxe')->references('idxe')->on('xe')->onDelete('cascade');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now())->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danhgia');
    }
};
