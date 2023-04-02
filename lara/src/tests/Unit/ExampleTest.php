<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Http\Request;
use \Illuminate\Contracts\Session\Session;
use Mockery;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $mock = $this->createMock(Session::class);
        $p = 1;
        $mock->method('put')->willReturn(null);
        $mock->method('get')->willReturn($p);
        $request = new Request();
        $request->setLaravelSession($mock);
        $request->session()->put('user', $p);
        $x = $request->session()->get('user');
        $this->assertEquals($x, 1);
    }
}
