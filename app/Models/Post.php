<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "1st post",
            "slug" => "first-post-title",
            "author" => "BaBoon",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam alias ipsum, aspernatur eos eaque cupiditate possimus pariatur quos exercitationem sunt quidem neque! Eum asperiores illum nostrum reprehenderit consequatur harum quos ad debitis reiciendis laborum, voluptatem ducimus repudiandae deleniti quaerat temporibus porro culpa illo magni numquam architecto distinctio! Magnam praesentium deserunt aspernatur reiciendis qui magni hic harum similique provident ratione natus, culpa distinctio molestias veniam rem quibusdam quisquam exercitationem nisi cum corrupti quo consectetur. Dolorem consequatur, distinctio non ullam explicabo tempore!"
        ],
        [
            "title" => "2nd post",
            "slug" => "second-post-title",
            "author" => "Fairlight",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam alias ipsum, aspernatur eos eaque cupiditate possimus pariatur quos exercitationem sunt quidem neque! Eum asperiores illum nostrum reprehenderit consequatur harum quos ad debitis reiciendis laborum, voluptatem ducimus repudiandae deleniti quaerat temporibus porro culpa illo magni numquam architecto distinctio! Magnam praesentium deserunt aspernatur reiciendis qui magni hic harum similique provident ratione natus, culpa distinctio molestias veniam rem quibusdam quisquam exercitationem nisi cum corrupti quo consectetur. Dolorem consequatur, distinctio non ullam explicabo tempore!"
        ]
    ];

    // use self because the array is static
    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
