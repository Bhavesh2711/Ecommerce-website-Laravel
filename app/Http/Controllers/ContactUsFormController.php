<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;



class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        // 
        //return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        // Send email using the Mailable class
        Mail::to('bp.sparkle062@gmail.com')->send(new ContactFormMail($details));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully.');
    }
    
}