<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY1RNVcD\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY1RNVcD/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY1RNVcD.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY1RNVcD\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerY1RNVcD\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Y1RNVcD',
    'container.build_id' => 'f3857b30',
    'container.build_time' => 1553541261,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY1RNVcD');
