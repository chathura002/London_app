<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // public function testBasicExample()
    // {
    //     $this->visit('/')
    //          ->see('Laravel 5');
    // }

    public function testTitlesModelCount()
    {
        $titles = new Title;
        $this->assertTrue( count( $titles->all() ) === 6, 'It should be 6 titles');
    }

    public function testLastTitleShouldBeProfessor()
    {
        $titles = new Title;
        $titles_arr = $titles->all();
        $this->assertEquals('Professor', array_pop($titles_arr), 'Titles last element should be a professor');

    }
}
