<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRegistrationRequest;
use App\Models\UserRegistration;


class UserRegistrationController extends Controller
{
    // show the start scree with form
    public function index()
    {
        return view('user_register');
    }


    // store the new event form data in backend
    public function store(EventRegistrationRequest $request)
    {

        //store the attach file in attachment folder in storage
        $nicAttachmentPath = $request->file('nic_attachment')->store('attachments', 'public');

        UserRegistration::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'event_name' => $request->event_name,
            'nic_number' => $request->nic_number,
            'nic_attachment' => $nicAttachmentPath,
        ]);

        return redirect()->route('registration.index')->with('success', 'Event Registration Successful !');
    }

    //show all the events in all registrations page
    public function show()
    {
        // limit item for page showing to 10
        $registrations = UserRegistration::paginate(10);
        return view('show_users', compact('registrations'));
    }
}
