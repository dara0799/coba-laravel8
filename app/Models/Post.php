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

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query ->where('title', 'like', '%' . $filters['search'] . '%')
        //             -> orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query ->where('title', 'like', '%' . $search . '%')
                    -> orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['editor'] ?? false, fn($query, $editor)
            => $query->whereHas('editor', fn($query)
                => $query->where('username', $editor)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
