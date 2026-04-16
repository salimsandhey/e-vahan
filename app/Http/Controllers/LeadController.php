<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use Illuminate\Support\Reflector;
// use Illuminate\Support\Str;
// use ReflectionFunction;
// use ReflectionMethod;

class LeadController extends Controller
{
    // public function contact()
    // {
    //     return view('contact');
    // }

   public function submitLead(Request $request)
    {
        // Authenticate with Zoho One CRM API
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'code' => $request->code,
            'client_id' => '1000.BTODB14N8FF3E6K3XBIOY0WZ95Y1YV',
            'client_secret' => 'f7c628b3fb444c8b83b09dbf478ddd3bda2b336c57',
            'redirect_uri' => 'http://localhost:8000/thank-you/',
            'grant_type' => 'authorization_code'
        ]);

        $accessToken = $response->json()['access_token'];

        // Send lead data to Zoho One CRM
        $leadData = [
            'data' => [
                [
                    'Interested Model' => $request->selected_value,
                    'First Name' => $request->first_name,
                    'Last Name' => $request->last_name,
                    'Email Address' => $request->email,
                    'Phone Number' => $request->phone,
                    'Your Address' => $request->location,
                    'State' => $request->state,
                    'City' => $request->city,
                    'Zip Code' => $request->zip_code
                    // Add more fields as needed
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json'
        ])->post('https://www.zohoapis.com/crm/v6/Leads', $leadData);

        // Check if lead submission was successful
        if ($response->successful()) {
            return response()->json(['success' => true]);
            // return redirect('/thank-you')->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Lead submission failed'], 500);
        }
    }
}
