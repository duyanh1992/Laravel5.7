<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DependenciesTest extends TestCase
{
    public function addNumber($a, $b)
    {
        return $a + $b;
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssert()
    {
        $sampleArray = [
            1 => 'Java',
            2 => 'PHP',
            3 => 'Python',
            4 => 'C#',
            5 => 'Ruby'
        ];

        $emptyArray = [];

       // $this->assertEquals(5, $this->addNumber(2,3));
        //$this->assertCount(4, $sampleArray);
        //$this->assertNotEmpty($emptyArray);
        //$this->assertEmpty($emptyArray);
        //$this->assertArraySubset([1 => 'Java', 3 => 'C'], $sampleArray);
        //$this->assertArrayHasKey(7, $sampleArray);
    }
}
