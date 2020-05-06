<?php

namespace Tests\Unit\API;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Comment;
use Faker\Factory;


class CommentTest extends TestCase
{
    /**
     * testing show comment
     */
    public function test_can_show_comment()
    {
        $comment = factory(Comment::class)->create();

        $this->get(route('api.comments.show', $comment))
            ->assertStatus(200);
    }

    /**
     * testing updating comment
     */
    public function test_can_update_comment()
    {
        $comment = factory(Comment::class)->create();

        $faker = Factory::create();

        $data = [
            'author' => $faker->name,
            'text' => $faker->text
        ];

        $this->put(route('api.comments.update', $comment->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    /**
     * testing deleting comment
     */
    public function test_can_delete_comment()
    {
        $comment = factory(Comment::class)->create();

        $this->delete(route('api.comments.destroy', $comment->id))
            ->assertStatus(204);
    }

    // /**
    //  * testing list comments
    //  */
    // public function test_can_list_comments()
    // {
    //     // $this->withoutExceptionHandling();

    //     $comments = factory(Comment::class, 2)->create()->map(function ($comment) {
    //         return $comment->only(['id', 'author', 'text']);
    //     });


    //     $this->get(route('api.comments.index'))
    //         ->assertStatus(200)
    //         ->assertJson($comments->toArray())
    //         ->assertJsonStructure([
    //             '*' => [
    //                 'id',
    //                 'author',
    //                 'text',
    //             ],
    //         ]);
    // }
}
