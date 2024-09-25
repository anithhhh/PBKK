<?php
namespace App\Models;

use Illuminate\Support\Arr; // Make sure to include this

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1', // Added slug for each post
                'title' => 'Judul Artikel 1',
                'author' => 'Anis Talib',
                'body' => 'Pahang is the largest state in Peninsular Malaysia, located on the east coast of the country. It is known for its natural beauty, including lush rainforests, stunning beaches, and majestic mountains. Real estate investment in Pahang offers the opportunity to live in a serene and peaceful environment, with access to modern amenities and a rich cultural heritage.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2', // Added slug for each post
                'title' => 'Judul Artikel 2',
                'author' => 'Anis Talib',
                'body' => 'Kuantan 188 is the tallest iconic tower on the East Coast and the second tallest in Malaysia. It is part of the Kuantan Waterfront project which is located in the Laman Teruntum compound where it allows visitors to enjoy the overall view of Kuantan City from 92.0 meters to 104.0 meters as well as panoramic views of the Kuantan River.',
            ],
        ];
    }


    public static function find($slug)
    {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
}
}