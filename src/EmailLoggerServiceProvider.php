<?php

namespace Vic\EmailLogger;

use Illuminate\Mail\Events\MessageSent;
use Illuminate\Support\Facades\Event;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vic\EmailLogger\Commands\EmailLoggerCommand;
use Vic\EmailLogger\Listeners\EmailSentListener;

class EmailLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('email-logger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_email-logger_table')
            ->hasCommand(EmailLoggerCommand::class);
    }

    public function boot()
    {
        parent::boot();

        Event::listen(MessageSent::class, EmailSentListener::class);
    }
}
