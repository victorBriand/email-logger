<?php

namespace Vic\EmailLogger\Commands;

use Illuminate\Console\Command;

class EmailLoggerCommand extends Command
{
    public $signature = 'email-logger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
