<?php

namespace App\Models;
class Post
{
    private static $blog_posts =  [
        [
            'title' => 'judul post pertama',
            'slug' => 'judul-posts-pertama',
            'author' => 'Muhamad Rizal Fahmi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, aspernatur vitae! Minus ratione delectus tempore laborum quae debitis repellendus explicabo iusto quibusdam impedit officia doloribus voluptates, voluptatem quos dolorem error.'
        ],
        [
            'title' => 'judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ahmad Soebardjo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi ipsa laborum aperiam quidem excepturi optio placeat suscipit voluptatum voluptas, quasi, libero sit eaque alias quae? Non maiores, quia obcaecati quae eum corrupti iste atque culpa officiis corporis suscipit deleniti vero odio nulla vel enim ipsum officia consectetur sapiente! Porro ducimus asperiores magnam animi voluptatum delectus temporibus facilis esse quasi ipsa placeat saepe suscipit autem nemo sequi et nostrum, consequuntur nihil minima unde voluptate eveniet soluta perspiciatis aut. Laboriosam blanditiis officia molestias culpa dicta magni ut neque impedit voluptatibus totam vero, eaque quae necessitatibus quam, commodi voluptas aperiam placeat, dolores doloribus!'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
{
    $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}