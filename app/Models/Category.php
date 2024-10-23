<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorys'; // Chỉ định bảng đúng tên
    protected $fillable = ['name', 'icon', 'url_key'];

    // Sử dụng Mutator để tự động tạo url_key từ name
    public static function boot()
    {
        parent::boot();

        // Khi tạo mới hoặc cập nhật một Category
        static::saving(function ($category) {
            // Kiểm tra nếu url_key chưa được đặt, thì tạo từ name
            if (empty($category->url_key) && !empty($category->name)) {
                $category->url_key = Str::slug($category->name, '-');
            }
        });
    }
}
