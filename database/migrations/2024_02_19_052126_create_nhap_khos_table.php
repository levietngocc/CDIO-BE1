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
        Schema::create('nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->string('ma_phieu_nhap');
            $table->string('ngay_nhap');
            $table->string('ten_san_pham');
            $table->integer('so_luong_nhap');
            $table->integer('don_gia_nhap');
            $table->integer('thanh_tien_nhap');
            $table->string('ghi_chu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhap_khos');
    }
};
