<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     *
     *
     * @author Yingjie Feng <fengit@shanjing-inc.com>
     */
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
}
