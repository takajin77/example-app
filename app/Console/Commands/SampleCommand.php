<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sample Command';
        public function __construct()
        {
            parent::__construct();
        }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'このコマンドはサンプルです';
        return 0;
    }
}
