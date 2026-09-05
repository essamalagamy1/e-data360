<?php

namespace App\Console\Commands;

use App\Services\GoogleReviewsService;
use Illuminate\Console\Command;

class SyncGoogleReviewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'reviews:sync-google';

    /**
     * The console command description.
     */
    protected $description = 'مزامنة مراجعات وتقييمات خرائط جوجل وتحديث جدول الآراء تلقائياً';

    /**
     * Execute the console command.
     */
    public function handle(GoogleReviewsService $service): int
    {
        $this->info('⏳ جاري جلب ومزامنة تقييمات خرائط جوجل...');

        $result = $service->syncReviews();

        if ($result['success']) {
            $this->info("✅ {$result['message']}");
            return Command::SUCCESS;
        }

        $this->error("❌ {$result['message']}");
        return Command::FAILURE;
    }
}
