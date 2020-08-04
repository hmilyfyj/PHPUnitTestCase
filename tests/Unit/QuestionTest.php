<?php

namespace Tests\Unit;

use App\Answer;
use App\Question;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     *
     *
     * @author Yingjie Feng <fengit@shanjing-inc.com>
     */
    public function testAQuestionHasManyAnsers()
    {
        $question = factory(Question::class)->create();

        factory(Answer::class)->create(['question_id' => $question->id]);

        $this->assertInstanceOf(HasMany::class, $question->answers());
    }
}
