<?php

return [
    'controllerMap' => [
        'site-app' => [
            'class' => codexten\site\dev\controllers\SiteAppController::class,
        ],
    ],
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'siteApp' => [
            'class' => \hidev\components\Directory::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@codexten/site/dev/views'],
                ],
            ],
        ],
        'vcsignore' => [
            '/public/site/assets/*' => 'site directories',
            '/public/site/minify/*' => 'site directories',
            'runtime/site/*' => 'site directories',
            'runtime/frontend/*' => 'site directories',
        ],
    ],
];
