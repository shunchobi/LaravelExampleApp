<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deletelog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ログの削除';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
