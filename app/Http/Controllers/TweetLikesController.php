<?php

namespace App\Http\Controllers;

use App\Tweet;

use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like(current_user());

        return back();
    }

    public function destory(Tweet $tweet)
    {
        $tweet->dislike(current_user());

        return back();
    }
}
