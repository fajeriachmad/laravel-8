<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    // $fillable is used to insert into declared fields with multiple values at once
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // $guarded is used to prevent user to fill the declared field
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query
        //         ->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query
        //         ->where('title', 'like', '%' . $search . '%')
        //         ->orWhere('body', 'like', '%' . $search . '%');
        // });

        // chain filter
        $query
            ->when(
                $filters['search'] ?? false,
                fn ($query, $search) =>
                $query->where(
                    fn ($query) =>
                    $query
                        ->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%')
                )
            )
            ->when(
                $filters['category'] ?? false,
                fn ($query, $category) =>
                $query->whereHas(
                    'category',
                    fn ($query) =>
                    $query->where('slug', $category)
                )
            )
            ->when(
                $filters['author'] ?? false,
                fn ($query, $author) =>
                $query->whereHas(
                    'author',
                    fn ($query) =>
                    $query->where('username', $author)
                )
            );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
