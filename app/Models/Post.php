<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Deo Subarno',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis sunt sequi voluptates minima magni a sapiente consequatur odit odio repudiandae, aspernatur ad nam voluptatum suscipit'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Inuyama Aoi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam aperiam eius minus, vero velit delectus similique suscipit animi commodi veniam sed consequuntur debitis optio dicta expedita voluptate tempora iure, corporis autem culpa totam. Labore soluta fugiat ducimus! Numquam, odio sapiente maxime exercitationem cupiditate '
        ],
    ];

    public static function getAll()
    {
        return collect(self::$blog_posts);
    }

    public static function getOneBySlug($slug)
    {
        $posts = static::getAll();
        return $posts->firstWhere('slug', $slug);
    }
}
