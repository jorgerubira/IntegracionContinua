<?php

namespace App\Tests;

use App\Service\SaludoService;
use PHPUnit\Framework\TestCase;
use App\Service\PersonasService;
use App\Service\PersonasServiceInterface;

class SaludoServiceTest extends TestCase
{
    public function testSomething()
    {
        $mockPerSer = $this->createMock(PersonasServiceInterface::class);
        
        $mockPerSer->method('getNombre')
                   ->willReturn('Ana');

        $obj=new SaludoService($mockPerSer); 
        $this->assertEquals('Hola Ana 2', $obj->saludar());
    }
}

