<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController
{
    /**
     * Handle the email verification request.
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home'); // Redirect to any desired page after verification
    }
}
