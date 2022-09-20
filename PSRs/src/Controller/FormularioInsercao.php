<?php

namespace Alura\Cursos\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Server\RequestHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    /**
     * @var EntitymanagerInterface
     */
    private $entityManager;

    public function __constructor(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = 'Teste';
        return new Response(200, [], $html);
    }
}