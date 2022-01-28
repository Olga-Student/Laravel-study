<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
        $model = new Category();
        $data = $model->getByTopic('history');
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);

        foreach ($data as $item){
            $this->assertEquals('history', $item['topic']);
        }
    }
}
