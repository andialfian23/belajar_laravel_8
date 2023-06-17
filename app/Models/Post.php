<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category()
    {
        // 1 post memiliki 1 kategory jadi  belongsTo
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        // 1 post dimiliki 1 user jadi  belongsTo
        return $this->belongsTo(User::class, 'user_id');
    }
}
