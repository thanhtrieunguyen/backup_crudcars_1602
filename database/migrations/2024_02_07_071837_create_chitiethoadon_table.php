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
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->Increments('idchitiethoadon');
            $table->Integer('idhoadon')->unsigned();
            $table->foreign('idhoadon')->references('idhoadon')->on('hoadon')->onDelete('cascade');
            $table->date('ngaythanhtoan')->nullable();
            $table->string('phidv', 255)->nullable();
            $table->string('tongtien', 255);
            $table->string('tinhtrang', 50)->nullable();
            $table->date('ngaythue');
            $table->date('ngaytra');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now())->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiethoadon');
    }
};
