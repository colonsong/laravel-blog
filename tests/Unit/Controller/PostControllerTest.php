<?php

namespace Tests\Unit\Controller;

use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_index()
    {
        $res = $this->get('/api/Post', []);
        $res->assertJsonFragment(['status'=>200]);
    }
}
