<?php

namespace App\Http\Controllers\API\CMS;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\SystemSetting;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    use ApiResponse;

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'company' => 'required|string',
            'contact_message' => 'nullable|string',
        ]);

        $system_setting = SystemSetting::first();

        if (!$system_setting) {
            return $this->error('No system settings found.', [], 500);
        }

        if (!$system_setting->email) {
            return $this->error('No email address configured in system settings.', [], 500);
        }

        // Send email to admin
        Mail::to($system_setting->email)->send(new ContactMail(
            $validated['name'],
            $validated['company'],
            $validated['email'],
            $validated['contact_message']
        ));

        return $this->success('Mail sent Successfully!', [], 200);

    }
}
