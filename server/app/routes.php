<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\InterfaceAdapters\Controllers\EmployeeController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->get('/employees', [EmployeeController::class, 'index']);
    $app->get('/employee/{id}', [EmployeeController::class, 'show']);
    $app->post('/employees', [EmployeeController::class, 'store']);
    $app->put('/employees/{id}', [EmployeeController::class, 'update']);
    $app->delete('/employees/{id}', [EmployeeController::class, 'delete']);
};
