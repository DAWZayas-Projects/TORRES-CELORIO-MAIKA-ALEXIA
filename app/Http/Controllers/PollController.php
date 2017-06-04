<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Poll;

class PollController extends Controller
{

    public function showAllPolls()
    {
        $polls = Poll::all();
        return view('polls')->with('polls', $polls);
    }

   public function showPoll(Poll $poll)
    {
        return view('poll')->with('poll', $poll);
    }

    public function showRecent()
    {
        $polls = Poll::all()->take(3);

        return view('welcome')->with('polls', $polls);
    }

}