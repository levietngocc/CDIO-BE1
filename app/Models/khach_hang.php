<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
       'email',
       'password',
       'so_dien_thoai',
       'ho',
       'ten',
       'ngay_sinh',
    ];
}
