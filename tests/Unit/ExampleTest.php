<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

   /*  public function testTitlesModelCount()
    {
        $title = new Title;
        $value = 1;
        $this->assertTrue(1 ===     $value, 'Value Should be 1');

        $this->assertTrue( count($title->all())=== 6 , 'There should have Only 6');
    } */

   /*  public function testLastTitleShouldBeProfessor()
    {
        $title = new Title;
        $title = $title->all();
        $this->assertTrue(array_pop($title)=== 'Professor', 'The last title should be Professor');
    } */
}
