<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\PersonasService;

class PersonasServiceTest extends TestCase
{
    public function testSomething()
    {
        $obj=new PersonasService();
        $this->assertEquals('Juan', $obj->getNombre());
    }
}

