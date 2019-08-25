<?php
//src/Service/SaludoService.php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Service\PersonasServiceInterface;

class SaludoService implements SaludoServiceInterface
{
    private $persona;

    public function __construct(PersonasServiceInterface $persona)
    {
        $this->persona=$persona;
    }

    public function saludar()
    {
        return "Hola " . $this->persona->getNombre();
    }
}

