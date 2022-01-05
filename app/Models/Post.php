<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [ 'title', 'category_id', 'user_id', 'slug', 'author', 'excerpt', 'body' ];
    protected $guarded = ['id'];
    protected $with = ['editor', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
