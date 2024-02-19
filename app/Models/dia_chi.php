<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dia_chi extends Model
{
    use HasFactory;
    protected $table = 'dia_chis';
    protected $fillable = [
            'ten_nguoi_nhan',
            'dia_chi',
            'ghi_chu',
            'so_dien_thoai',
        ];
}
