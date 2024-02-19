<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
                'tong_tien',
                'tinh_trang',
                'ten_nguoi_nhan',
                'dia_chi',
                'so_dien_thoai',
                'ghi_chu',
                'ma_don_hang',
    ];
}
