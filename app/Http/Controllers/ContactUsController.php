<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ContactUsController extends Controller
{
    //
    public function contact_us(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'selectedTopic' => 'required|string|max:255', // Adjust the max length as needed
            'meetingSessionLink' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 400, // Bad Request
            ]);
        }

        // Data is valid, proceed with saving to the database
        try {
            $ContactUs = new ContactUs;
            $ContactUs->name = $request->name;
            $ContactUs->email = $request->email;
            $ContactUs->selectedTopic = $request->selectedTopic;
            $ContactUs->meetingSessionLink = $request->meetingSessionLink;
            $ContactUs->created_at = Carbon::now();
            $ContactUs->updated_at = Carbon::now();
            $ContactUs->save();

            return response()->json([
                'message' => 'Contact Created Successfully',
                'ContactUs' => $ContactUs,
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error($e);

            return response()->json([
                'message' => 'Contact not created',
                'status' => 500, // Internal Server Error
            ]);
        }
    }
}
