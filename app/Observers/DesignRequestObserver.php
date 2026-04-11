<?php

namespace App\Observers;

use App\Models\DesignRequest;
use Tawhub\Laravel\Facades\Tawhub;

use Illuminate\Support\Facades\Log;

class DesignRequestObserver
{
    public function created(DesignRequest $designRequest): void
    {
        try {
            Tawhub::send_template(
                '966553970641',
                'b4ac9d13-ccbe-4f79-8a59-0ad90cdada65',
                [
                    'client_name' => $designRequest->full_name,
                    'company_name' => $designRequest->company_name ?? 'N/A',
                    'email' => $designRequest->email ?? 'N/A',
                    'phone' => $designRequest->phone ?? 'N/A',
                    'project_type' => $designRequest->project_type ?? 'N/A',
                    'price' => $designRequest->budget_range ?? 'N/A',
                    'project_details' => $designRequest->details ?? 'N/A',
                ]
            );
        } catch (\Throwable $e) {
            Log::error('WhatsApp send failed', [
                'error' => $e->getMessage(),
                'design_request_id' => $designRequest->id,
            ]);
        }
    }

}
