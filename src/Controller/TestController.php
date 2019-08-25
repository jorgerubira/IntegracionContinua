<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\Usuario;
use App\Service\SaludoService;
use App\Service\ISaludoService;
use App\Repository\UsuarioRepository;
use App\Service\SaludoServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */ 
    public function index(SaludoServiceInterface $saludo)
    {
        $res=$saludo->saludar();
        return $this->json($res); 
    }

    /**
     * @Route("/test2/{nombre}", name="test2")
     */ 
    public function index2(Usuario $user)
    {

        return $this->json($user); 
    }

}

