<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC9syxpw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC9syxpw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerC9syxpw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerC9syxpw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerC9syxpw\appProdProjectContainer([
    'container.build_hash' => 'C9syxpw',
    'container.build_id' => '14b11fc5',
    'container.build_time' => 1568342091,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC9syxpw');
