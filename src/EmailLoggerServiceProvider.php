<?php

namespace Vic\EmailLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vic\EmailLogger\Commands\EmailLoggerCommand;

class EmailLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('email-logger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_email-logger_table')
            ->hasCommand(EmailLoggerCommand::class);
    }
}
