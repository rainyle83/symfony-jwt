<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRtg9wq3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRtg9wq3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRtg9wq3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRtg9wq3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRtg9wq3\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Rtg9wq3',
    'container.build_id' => '3ffe513f',
    'container.build_time' => 1534441070,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRtg9wq3');
