<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQsuB8DC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQsuB8DC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQsuB8DC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQsuB8DC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQsuB8DC\App_KernelDevDebugContainer([
    'container.build_hash' => 'QsuB8DC',
    'container.build_id' => '0c85b61a',
    'container.build_time' => 1608130697,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQsuB8DC');
