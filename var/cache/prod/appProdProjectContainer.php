<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSihkj0y\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSihkj0y/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSihkj0y.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSihkj0y\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSihkj0y\appProdProjectContainer([
    'container.build_hash' => 'Sihkj0y',
    'container.build_id' => '82cdebbb',
    'container.build_time' => 1565246815,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSihkj0y');
