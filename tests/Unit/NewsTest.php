<?php

namespace Tests\Unit;

use App\Models\News;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $model = new News();
        $data = $model->getByCategoryId(3);
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);

        foreach ($data as $item){
            $this->assertEquals(3, $item['category_id']);
        }
    }
}
