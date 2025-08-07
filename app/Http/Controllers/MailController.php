<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|digits:10',
            'time'    => 'required|string|max:100',
            'message' => 'required|string|max:1000',
        ]);

        // Send email with CC
        Mail::to('info@shubhanandam.com')
            ->cc('sandeep@shadowinfosystem.com', 'aman@shadowinfosystem.com') // <-- Add your CC here
            ->send(new TestMail($data));

        // Redirect to thank-you page
        return redirect()->route('thank.you');
    }
}
