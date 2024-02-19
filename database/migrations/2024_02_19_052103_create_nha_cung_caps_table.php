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
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->id();
            $table->string('ho_lot');
            $table->string('ten');
            $table->string('ngay_sinh');
            $table->integer('so_dien_thoai');
            $table->string('dia_chi');
            $table->string('ma_so_thue');
            $table->string('ten_cong_ty');
            $table->string('anh_minh_chung');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('tinh_trang');
            $table->integer('tong_tien_da_ban');
            $table->integer('tong_don_hang_da_ban');
            $table->integer('tong_don_hang_doi_tra');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nha_cung_caps');
    }
};
