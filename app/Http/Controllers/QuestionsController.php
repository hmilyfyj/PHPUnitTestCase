<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    //
    /**
     *
     *
     * @author Yingjie Feng <fengit@shanjing-inc.com>
     */
    public function index()
    {
        //导入类库

        //获取参数

        //校验参数

    }

    /**
     *
     *
     * @author Yingjie Feng <fengit@shanjing-inc.com>
     */
    public function show(Question $question)
    {
        return view("questions.show", compact('question'));
    }
}
