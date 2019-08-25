<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario/{id}", name="usuario")
     */
    public function index(UsuarioRepository $repo, int $id)
    {
        $usuario = $repo->find($id);
        return $this->render('usuario/index.html.twig', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * @Route("/usuarioSaludoa", name="usuarioSaludoa")
     */
    public function saludar(UsuarioRepository $repo){
        return $this->render('usuario/ok.html.twig');
    }
}
