<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTq24fem\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTq24fem/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTq24fem.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTq24fem\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTq24fem\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Tq24fem',
    'container.build_id' => 'b21e08c0',
    'container.build_time' => 1549106651,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerTq24fem');
