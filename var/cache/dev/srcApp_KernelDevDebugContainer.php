<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3G2Mmvl\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3G2Mmvl/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3G2Mmvl.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3G2Mmvl\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3G2Mmvl\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '3G2Mmvl',
    'container.build_id' => '24d90b53',
    'container.build_time' => 1544493314,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3G2Mmvl');
