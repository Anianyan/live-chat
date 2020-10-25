<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;

class ClearMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:daily-messages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete message during two days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Message::whereBetween('created_at', [now()->subDays(2), now()->subDays(1)])->delete();
        return 0;
    }
}
