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
        Schema::create('xe', function (Blueprint $table) {
            $table->Increments('idxe');
            $table->string('tenxe', 255);
            $table->text('mieuta')->nullable();
            $table->string('gia', 255);
            $table->string('bienso', 20)->nullable();
            $table->string('truyendong', 50)->nullable();
            $table->string('nhienlieu', 50)->nullable();
            $table->decimal('nhienlieutieuhao_km', 5, 2)->nullable();
            $table->boolean('tinhtrang')->nullable()->default(false);
            $table->Integer('iddongxe')->unsigned();
            $table->foreign('iddongxe')->references('iddongxe')->on('dongxe')->onDelete('restrict');
            $table->Integer('idhangxe')->unsigned();
            $table->foreign('idhangxe')->references('idhangxe')->on('hangxe')->onDelete('restrict');
            $table->Integer('idhinhxe')->unsigned();
            $table->foreign('idhinhxe')->references('idhinhxe')->on('hinhxe')->onDelete('restrict');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now())->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xe');
    }
};
