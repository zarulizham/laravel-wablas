<?php

namespace ZarulIzham\Wablas;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ZarulIzham\Wablas\Commands\WablasCommand;

class WablasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-wablas')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-wablas_table')
            ->hasCommand(WablasCommand::class);
    }
}
