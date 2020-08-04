<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     *
     *
     * @author Yingjie Feng <fengit@shanjing-inc.com>
     */
    public function store(Question $question)
    {
        $question->answers()->create([
            'user_id' => request('user_id'),
            'content' => request('content')
        ]);

        return response()->json([], 200);
    }
}
