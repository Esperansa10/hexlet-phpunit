<?php

namespace Hexlet\Phpunit\Tests; 

use PHPUnit\Framework\TestCase;
use Phpunit\Functional;
use function Hexlet\Phpunit\Functional\filter;
use function App\Implementations\set;

class SolutionTest extends TestCase
{
    //BEGIN (write your solution here)
    private $coll;
    public function setUp(): void
    {
        // Так к переменной происходит доступ внутри класса
        // В данном случае запись данных
        $this->coll = ['One', true, 3, 10, 'cat', [], '', 10, false];
    }
    public function testFilter(): void
    {
        // Тут идет обращение к свойству
        Functional\filter($this->coll, fn($element) => is_numeric($element));
    }

    public function testZip(): void
    {
        // Тут идет обращение к свойству
        $coll2 = [/* тут другая коллекция конкретно для данного теста */];
        $result = Functional\zip($this->coll, $coll2);
        // $expected = /* тут что ожидаем */;
        $this->assertEquals($expected, $result);
    }
}
    //END

