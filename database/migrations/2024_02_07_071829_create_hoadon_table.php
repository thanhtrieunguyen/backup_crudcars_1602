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
        Schema::create('hoadon', function (Blueprint $table) {
            $table->Increments('idhoadon');
            $table->Integer('idgiaodich')->unsigned();
            $table->foreign('idgiaodich')->references('idgiaodich')->on('giaodich')->onDelete('restrict');
            $table->Integer('iduser')->unsigned();
            $table->foreign('iduser')->references('iduser')->on('users')->onDelete('restrict');
            $table->Integer('idxe')->unsigned();
            $table->foreign('idxe')->references('idxe')->on('xe')->onDelete('restrict');
            $table->date('ngaythanhtoan')->nullable();
            $table->string('phidv', 255)->nullable();
            $table->string('tongtien', 255);
            $table->boolean('tinhtranghoadon')->nullable()->default(false);
            $table->date('ngaynhanxe');
            $table->date('ngaytraxe');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->default(now())->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoadon');
    }
};
