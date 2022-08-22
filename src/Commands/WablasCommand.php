<?php

namespace ZarulIzham\Wablas\Commands;

use Illuminate\Console\Command;

class WablasCommand extends Command
{
    public $signature = 'laravel-wablas';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
