<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Apix\Log\Logger\File as ApixFile;
use NtSchool\Loggers\ApixLogger;
$builder = new ContainerBuilder();
$container = $builder->newInstance();

try {
    $container->set('logger', function () {
        $logger = new ApixLogger(
            new ApixFile(
                __DIR__ . '/../resources/logs/log.txt'
            )
        );
        return $logger;
    });
} catch (\Aura\Di\Exception\ContainerLocked $e) {
} catch (\Aura\Di\Exception\ServiceNotObject $e) {
}

try {
    $container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer) {
        return new \NtSchool\Action\HomeAction($renderer);
    });
} catch (\Aura\Di\Exception\ContainerLocked $e) {
} catch (\Aura\Di\Exception\ServiceNotObject $e) {
}
try {
    $container->set(\NtSchool\Action\PostsAction::class, function () use ($renderer,$container) {
        return new \NtSchool\Action\PostsAction($renderer,$container->get('logger'));
    });
} catch (\Aura\Di\Exception\ContainerLocked $e) {
} catch (\Aura\Di\Exception\ServiceNotObject $e) {
}