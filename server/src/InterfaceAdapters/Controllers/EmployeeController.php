<?php

namespace App\InterfaceAdapters\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Application\UseCases\Employees\{
    CreateEmployee,
    ReadEmployees,
    ReadEmployee,
    UpdateEmployee,
    DeleteEmployee,
};

class EmployeeController
{
    public function __construct(
        private CreateEmployee $createEmployee,
        private ReadEmployees $readEmployees,
        private ReadEmployee $readEmployee,
        private UpdateEmployee $updateEmployee,
        private DeleteEmployee $deleteEmployee
    ) {
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $employees = $this->readEmployees->execute();
        $response->getBody()->write(json_encode($employees));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function store(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $data = $request->getParsedBody();
        $employee = $this->createEmployee->execute($data);
        $response->getBody()->write(json_encode($employee));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    }

    public function show(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $employee = $this->readEmployee->execute($args['id']);

        if (!$employee) {
            return $response->withStatus(404);
        }

        $response->getBody()->write(json_encode($employee));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function update(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = $request->getParsedBody();
        $employee = $this->updateEmployee->execute($args['id'], $data);

        if (!$employee) {
            return $response->withStatus(404);
        }

        $response->getBody()->write(json_encode($employee));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function delete(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $deleted = $this->deleteEmployee->execute($args['id']);
        return $response->withStatus($deleted ? 204 : 404);
    }
}