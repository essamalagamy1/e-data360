<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(StoreContactMessageRequest $request)
    {
        $message = ContactMessage::create($request->validated());

        \App\Events\ContactMessageSent::dispatch($message);

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح');
    }
}
