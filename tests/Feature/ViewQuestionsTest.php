<?php

namespace Tests\Unit;

use Tests\TestCase;

class ViewQuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanViewQuestions()
    {
        // 0. 抛出异常
        $this->withoutExceptionHandling();

        $test = $this->get("/questions");

        $test->assertStatus(200);
    }

    /** @test */
    public function user_can_view_questions()
    {
        // 0. 抛出异常
        $this->withoutExceptionHandling();

        $test = $this->get("/questions");

        $test->assertStatus(200);
    }
}
