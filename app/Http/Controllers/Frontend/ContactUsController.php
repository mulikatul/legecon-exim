<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsFormRequest;
use App\Models\ContactUs;
use App\Notifications\ContactUsNotificationToAdmin;
use Illuminate\Http\Request;
use Notification;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact_us');
    }
    public function storeContactUs(ContactUsFormRequest $request)
    {
        // dd($request->all());
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->company = $request->company;
        $contact->location = $request->location;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
        $contact->save();

        Notification::route('mail', config( 'constants.mail.contactUsNotificationToAdmin' ))->notify(new ContactUsNotificationToAdmin($request->all())); 
        alert()->success('Success!','Thank You For Contacting us, we will get back to you soon!');
        return redirect()->back();
    }
}
