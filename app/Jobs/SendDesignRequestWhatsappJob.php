<?php

namespace App\Jobs;

use App\Models\DesignRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tawhub\Laravel\Facades\Tawhub;

class SendDesignRequestWhatsappJob implements ShouldQueue
{
    use Dispatchable;

    public function __construct(public DesignRequest $designRequest) {}

    public function handle(): void
    {
        Tawhub::send_template(
            '966553970641',
            'b4ac9d13-ccbe-4f79-8a59-0ad90cdada65',
            [
                'client_name' => $this->designRequest->full_name,
                'company_name' => $this->designRequest->company_name ?? 'N/A',
                'email' => $this->designRequest->email ?? 'N/A',
                'phone' => $this->designRequest->phone ?? 'N/A',
                'project_type' => $this->designRequest->project_type ?? 'N/A',
                'price' => $this->designRequest->price ?? 'غير محدد',
                'project_details' => $this->designRequest->details ?? 'N/A',
            ]
        );
    }
}
