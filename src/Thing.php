<?php
declare(strict_types=1);

final class Thing
{

    public function doSomething(bool $param)
    {
        return $param ? 'A' : 'B';
    }
}