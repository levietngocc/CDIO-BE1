<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chi_tiet_don_hang extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
            'so_luong_mua',
            'don_gia_mua',
            'thanh_tien_mua',
            'ten_san_pham',
    ];
}
