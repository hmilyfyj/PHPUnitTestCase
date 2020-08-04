<?php

namespace Tests\Unit;

use App\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_a_single_question()
    {
        $this->withoutExceptionHandling();

        // 创建问题
        $question = factory(Question::class)->create();

        // 访问接口
        $test = $this->get('/questions/' . $question->id);

        // 监测问题内容
        $test->assertStatus(200)
            ->assertSee($question->titile)
            ->assertSee($question->content);
    }
}
