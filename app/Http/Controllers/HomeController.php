<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\JoinTeamMail;

class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth', 'verified']);
    // }

    public function home()
    {
        $title = 'eVAHAN Suvidha Kendra & ATS , ADTC Services';
        $data['getRecord'] = BlogModel::getRecordFront();
        return view('home', compact('title'), $data);

    }

    public function about_evsk()
    {
        $title = 'About eVAHAN Suvidha Kendra';
        return view('about-evsk', compact('title'));
    }

    public function services()
    {
        $title = 'Services eVAHAN Suvidha Kendra';
        return view('services', compact('title'));
    }

    public function evahan_suvidha_kendra()
    {
        $title = 'eVAHAN Suvidha Kendra (eVSK)';
        return view('evahan-suvidha-kendra', compact('title'));
    }

    public function automated_testing_system()
    {
        $title = 'Automated Testing System (ATS)';
        return view('automated-testing-system', compact('title'));
    }

    public function automatic_driving_training_centre()
    {
        $title = 'Automatic Driving Training Centre (ADTC)';
        return view('automatic-driving-training-centre', compact('title'));
    }

    public function smart_traffic_parking_management_systems()
    {
        $title = 'Smart Traffic and Parking Management Systems (STPMS)';
        return view('smart-traffic-parking-management-systems', compact('title'));
    }

    public function blog()
    {
        $title = 'Latest eVAHAN Blogs';
        $data['getRecord'] = BlogModel::getRecordFront();
        return view('blog', compact('title'), $data);
    }

    public function blogdetails($slug)
    {

        $getRecord = BlogModel::getRecordSlug($slug);
        if(!empty($getRecord))
        {
            // $title = 'Blog Details eVAHAN Suvidha Kendra';
            $data['title'] = $getRecord->title;
            $data['meta_title'] = $getRecord->meta_title;
            $data['meta_description'] = $getRecord->meta_description;
            $data['meta_keywords'] = $getRecord->meta_keywords;

            $data['getCategory'] = CategoryModel::getCategory();
            $data['getRecentPosts'] = BlogModel::getRecentPosts();
            $data['getRelatedPosts'] = BlogModel::getRelatedPosts($getRecord->category_id, $getRecord->id);
            $data['getRecord'] = $getRecord;
            return view('blog_details', $data);
        }
        else
        {
            abort(404);
        }
    }

    // public function blog_details()
    // {
    //     $title = 'Blog Details eVAHAN Suvidha Kendra';
    //     return view('blog_details', compact('title'));
    // }

    public function contact()
    {
        $title = 'Contact US eVAHAN Suvidha Kendra';
        return view('contact-us', compact('title'));
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|required|string|max:20',
            'location' => 'nullable|required|string|max:255',
            'selected_value' => 'nullable|required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('contact@e-vahan.com')->send(new ContactMail($validatedData));

        // return redirect()->back()->with('success', 'Message sent successfully!');

        return redirect('/thank-you-form');
    }



    public function faq()
    {
        $title = 'Frequently Asked Question eVAHAN Suvidha Kendra';
        return view('faq', compact('title'));
    }

    public function gallery()
    {
        $title = 'Gallery eVAHAN Suvidha Kendra';
        return view('gallery', compact('title'));
    }

    public function special_projects()
    {
        $title = 'Special Projects eVAHAN Suvidha Kendra';
        return view('special-projects', compact('title'));
    }

    public function privacy_policy()
    {
        $title = 'Privacy Policy eVAHAN';
        return view('privacy-policy', compact('title'));
    }

    public function terms_and_conditions()
    {
        $title = 'Terms And Conditions eVAHAN';
        return view('terms-and-conditions', compact('title'));
    }

    public function shipping_refund_policy()
    {
        $title = 'Shipping & Refund Policy eVAHAN';
        return view('shipping-refund-policy', compact('title'));
    }

    public function join_our_team()
    {
        $title = 'Join Our eVAHAN Team';
        return view('join-our-team', compact('title'));
    }

    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name_of_candidate' => 'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
            'education' => 'required|string|max:255',
            'aadhar_card_number' => 'required|string|max:20',
            'file_upload' => 'required|file|max:10240', // Example: 10MB max file size
        ]);

        // Handle file upload
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('upload', $fileName);
        }

        // if ($request->hasFile('file_upload')) {
        //     $path = $request->file('file_upload')->store('uploads');
        //     $validatedData['file_path'] = $path;
        // }

        // if ($request->hasFile('file_upload')) {
        //     $path = $request->file('file_upload')->store('uploads');
        // }

        // $file = $request->file('file_upload');
        // $fileName = $file->getClientOriginalName();
        // $file->storeAs('uploads', $fileName);

        // Send email notification
        $mailData = [
            'name_of_candidate' => $validatedData['name_of_candidate'],
            'fathers_name' => $validatedData['fathers_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'location' => $validatedData['location'],
            'city' => $validatedData['city'],
            'zip_code' => $validatedData['zip_code'],
            'education' => $validatedData['education'],
            'aadhar_card_number' => $validatedData['aadhar_card_number'],
            'file_upload' => $validatedData['file_upload'],
        ];

        // You need to configure your mail settings in config/mail.php
        Mail::to('contact@e-vahan.com')->send(new \App\Mail\JoinTeamMail($mailData));

        // Redirect back with success message
        // return redirect()->back()->with('success', 'Your application has been submitted successfully!');

        return redirect('/thank-you-form');
    }

    public function thank_you()
    {
        $title = 'Thank You eVAHAN';
        return view('thank-you', compact('title'));
    }

    public function thank_you_form()
    {
        $title = 'Thank You For eVAHAN Team';
        return view('thank-you-form', compact('title'));
    }

}
