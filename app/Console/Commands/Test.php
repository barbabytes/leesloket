<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    protected $signature = 'test';

    protected $description = 'Test';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

    }
}
