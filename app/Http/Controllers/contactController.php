<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function store_contact(Request $request)
    {
        try {
            $contact = new contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->selectedTopic = $request->selectedTopic;
            $contact->meetingSessionLink = $request->meetingSessionLink;
            $contact->created_at = Carbon::now();
            $contact->updated_at = Carbon::now();
            $contact->save();

            return response()->json([
                'message' => 'Contact Created Successfully',
                'contact' => $contact,
                'status' => 200,
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Contact not created',
                'contact' => $contact,
                'status' => 201,
                '4' => $e,
            ]);
        }
    }
}
