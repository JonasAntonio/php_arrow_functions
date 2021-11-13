<?php

class TestClosure
{
    function test(Closure $closure)
    {
        echo $closure('Variable a', 'Variable b', 'Variable c');
    }
}

class MyClass
{
    function dumpVariables($a, $b, $c)
    {
        var_dump($a, $b, $c);
    }
}

(new TestClosure())->test(fn ($a, $b, $c) => (new MyClass())->dumpVariables($a, $b, $c));
