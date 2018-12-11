<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

try {
    $container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer) {
        return new \NtSchool\Action\HomeAction($renderer);
    });
} catch (\Aura\Di\Exception\ContainerLocked $e) {
} catch (\Aura\Di\Exception\ServiceNotObject $e) {
}
try {
    $container->set(\NtSchool\Action\PostsAction::class, function () use ($renderer) {
        return new \NtSchool\Action\PostsAction($renderer);
    });
} catch (\Aura\Di\Exception\ContainerLocked $e) {
} catch (\Aura\Di\Exception\ServiceNotObject $e) {
}