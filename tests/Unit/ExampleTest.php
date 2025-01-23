<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HelloWorldController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_show_hello_method_returns_hello_string()
    {
        $controller = new HelloWorldController();
        $result = $controller->showHello();
        
        $this->assertEquals('hello', $result);
    }
}
