<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chuyen_muc extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
        'ten_chuyen_muc',
        'slug_chuyen_muc',
        'id_chuyen_muc_cha',
        'tinh_trang',
        'hinh_anh',    
    ];
}
