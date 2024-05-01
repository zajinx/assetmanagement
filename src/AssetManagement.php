<?php

namespace JinxIT\AssetManagement;
use Filament\Contracts\Plugin;
use Filament\Panel;

class AssetManagement implements Plugin
{

    public static function make(): AssetManagement
    {
        return new AssetManagement();
    }
    public function getId(): string
    {
        return 'jinxit-asset-management';
    }

    public function register(Panel $panel): void
    {
        // TODO: Implement register() method.
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
