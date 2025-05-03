<?php

namespace App\InterfaceAdapters\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Application\UseCases\Benefits\{
    ReadBenefits
};

class BenefitController
{
    public function __construct(
        private ReadBenefits $readBenefits,
    ) {
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $benefits = $this->readBenefits->execute();
        $response->getBody()->write(json_encode($benefits));
        return $response->withHeader('Content-Type', 'application/json');
    }
}