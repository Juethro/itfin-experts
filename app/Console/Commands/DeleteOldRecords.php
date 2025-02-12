<?php

namespace App\Console\Commands;

use App\Models\Message;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DeleteOldRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'records:delete-old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus data yang lebih dari 1 tahun';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Menghapus data yang lebih dari 1 tahun
        $deleted = Message::where('created_at', '<', Carbon::now()->subYear())->delete();

        $this->info("$deleted records deleted.");
    }
}
