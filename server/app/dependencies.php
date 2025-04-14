<?php

declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use App\Domain\Repositories\EmployeeRepositoryInterface;
use App\Infrastructure\Persistence\Repositories\EmployeeRepository;
use App\Application\UseCases\CreateEmployee;
use App\Application\UseCases\ReadEmployees;
use App\Application\UseCases\ReadEmployee;
use App\Application\UseCases\UpdateEmployee;
use App\Application\UseCases\DeleteEmployee;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        'db' => function () {
            require_once '../src/Infrastructure/Persistence/database.php';
            return setupDatabase();
        },

        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get(SettingsInterface::class);

            $loggerSettings = $settings->get('logger');
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },

        EmployeeRepositoryInterface::class => function () {
            return new EmployeeRepository;
        },

        CreateEmployee::class => function (ContainerInterface $c) {
            return new CreateEmployee($c->get(EmployeeRepositoryInterface::class));
        },

        ReadEmployees::class => function (ContainerInterface $c) {
            return new ReadEmployees($c->get(EmployeeRepositoryInterface::class));
        },

        ReadEmployee::class => function (ContainerInterface $c) {
            return new ReadEmployee($c->get(EmployeeRepositoryInterface::class));
        },

        UpdateEmployee::class => function (ContainerInterface $c) {
            return new UpdateEmployee($c->get(EmployeeRepositoryInterface::class));
        },

        DeleteEmployee::class => function (ContainerInterface $c) {
            return new DeleteEmployee($c->get(EmployeeRepositoryInterface::class));
        }
    ]);
};
