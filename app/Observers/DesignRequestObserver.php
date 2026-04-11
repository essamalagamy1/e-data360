<?php

namespace App\Observers;

use App\Jobs\SendDesignRequestWhatsappJob;
use App\Models\DesignRequest;
use Tawhub\Laravel\Facades\Tawhub;

use Illuminate\Support\Facades\Log;

class DesignRequestObserver
{
    public function created(DesignRequest $designRequest): void
    {
        SendDesignRequestWhatsappJob::dispatchAfterResponse($designRequest);
    }

}
