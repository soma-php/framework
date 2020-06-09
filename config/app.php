<?php return [
    'name' => 'SOMA Application',
    'version' => '1.0.0',
    'date-format' => false,
    'timezone' => 'Europe/Stockholm',
    'providers' => [
        \MyApp\Providers\HelloProvider::class,
    ],
    'aliases' => [
        'Collection' => \Illuminate\Support\Collection::class,
        'Repository' => \Soma\Repository::class,
        'Store' => \Soma\Store::class,
        'Manifest' => \Soma\Manifest::class,

        'App' => \Soma\Facades\App::class,
        'Config' => \Soma\Facades\Config::class
    ],
    'commands' => [
        \Soma\Commands\AppInstall::class,
        \Soma\Commands\AppUninstall::class,
        \Soma\Commands\AppRefresh::class,
        \Soma\Commands\AppTinker::class,
        \Soma\Commands\AppServe::class,
        \Soma\Commands\AppClearCache::class,
    ],
];
