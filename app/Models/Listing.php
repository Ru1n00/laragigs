<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'My first post',
                'content' => 'This is my first post'
            ],
            [
                'id' => 2,
                'title' => 'My second post',
                'content' => 'This is my second post'
            ],
            [
                'id' => 3,
                'title' => 'My third post',
                'content' => 'This is my third post'
            ]
        ];
    }

    public static function find($id) {
        $allListings = self::all();

        forEach($allListings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
        return [];
    }
}