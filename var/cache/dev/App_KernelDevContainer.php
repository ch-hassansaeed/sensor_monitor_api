<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerROWSiyP\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerROWSiyP/App_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerROWSiyP.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\ContainerROWSiyP\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \ContainerROWSiyP\App_KernelDevContainer([
    'container.build_hash' => 'ROWSiyP',
    'container.build_id' => 'c936c2a3',
    'container.build_time' => 1607799719,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerROWSiyP');
