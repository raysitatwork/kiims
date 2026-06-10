<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CenterModel;
use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function center()
    {
        $centers = CenterModel::latest()->get();
        return view('frontend.center', compact('centers'));
    }
    

    public function ecg()
    {
        return view('frontend.courses.ecg');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function allCourse()
    {
        return view('frontend.courses.all_course');
    }
    public function ot()
    {
        return view('frontend.courses.ot');
    }

    public function opthemic()
    {
        return view('frontend.courses.opthemic');
    }
    public function emt()
    {
        return view('frontend.courses.emt');
    }
    public function dmit()
    {
        return view('frontend.courses.dmit');
    }
    public function ctmr()
    {
        return view('frontend.courses.ct_mr');
    }
    public function dresser()
    {
        return view('frontend.courses.dresser');
    }

    public function BMLT()
    {
        return view('frontend.courses.bmlt');
    }
    public function Dmlt()
    {
        return view('frontend.courses.dmlt');
    }

    public function pharmacy()
    {
        return view('frontend.courses.pharmacy');
    }

    public function associate()
    {
        return view('frontend.associate');
    }

    public function board()
    {
        return view('frontend.advisory_board');
    }


    public function dpharma()
    {
        return view('frontend.courses.dpharma');
    }

    public function bpharma()
    {
        return view('frontend.courses.bpharma');
    }

    public function nursing()
    {
        return view('frontend.courses.nursing');
    }

    public function anm()
    {
        return view('frontend.courses.anm');
    }

    public function gnm()
    {
        return view('frontend.courses.gnm');
    }


    public function Cms()
    {
        return view('frontend.courses.cms');
    }

    public function other_bsc_courses()
    {
        return view('frontend.courses.other_bsc_courses');
    }

    public function other_certificate_courses()
    {
        return view('frontend.courses.other_certificate_courses');
    }

    public function other_diploma_courses()
    {
        return view('frontend.courses.other_diploma_course');
    }


    public function saveAssociate(Request $request){
        $courses = $request->input('work');

        DB::table('associate')->insert([
            'orgnization_name' => $request->organization_name,
            'institution_spoc' => $request->institution_spoc,
            'phone_number' => $request->phone_number,
            'designation_spoc' => $request->spoc_designation,
            'email' => $request->email,
            'state' => $request->State,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'gstin' => $request->gstin,
            'address' => $request->institution_address,
            'carpet_area' => $request->carpet_area,
            'total_area' => $request->total_area,
            'works' => json_encode($courses),
            'course_name' => $request->course,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function registerStore(Request $request)
    {
        // Validate basic fields
        $request->validate([
            'name' => 'required',
            'aadhar' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // 'image' => ,
            // 'sign' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_image.' . $request->image->extension();
            $request->image->move(public_path('uploads/images'), $imageName);
        }

        // Sign Upload
        $signName = null;
        if ($request->hasFile('sign')) {
            $signName = time() . '_sign.' . $request->sign->extension();
            $request->sign->move(public_path('uploads/signs'), $signName);
        }

        // Generate Unique ID like STU202504160001
        $date = now()->format('Y'); // e.g. 20250416
        $lastId = DB::table('register_users')->max('id') + 1;
        $uniqueId = 'KIIMS' . $date . str_pad($lastId, 4, '0', STR_PAD_LEFT);

        // Store data into register_user table
        DB::table('register_users')->insert([
            'enrol_id' => $uniqueId,
            'course' => $request->course,
            'name' => $request->name,
            'aadhar' => $request->aadhar,
            'email' => $request->email,
            'phone' => $request->phone,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'nation' => $request->nation,
            'religion' => $request->religion,
            'disability' => $request->disability,
            'disadvantaged' => $request->disadvantaged,
            'medium' => $request->medium,
            'pin' => $request->pin,
            'city' => $request->city,
            'state' => $request->state,
            'address' => $request->address,
            'image' => $imageName,
            'sign' => $signName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!')->with('enrol_id', $uniqueId);
    }

    public function searchByEnrollment(Request $request)
    {
        $enrol_id = $request->input('enrol_id');

        $user = RegisterUser::where('enrol_id', $enrol_id)
            ->where('status', 'approved')
            ->first();

        if ($user) {
            // success message ko session me pass karke with() se redirect karein
            return redirect()->back()->with([
                'user_data' => $user,
                'swal_message' => [
                    'type' => 'success',
                    'title' => 'Enrollment Approved!',
                    'text' => 'Your enrollment ID is approved.'
                ]
            ]);
        } else {
            return redirect()->back()->with([
                'swal_message' => [
                    'type' => 'error',
                    'title' => 'Not Approved',
                    'text' => 'No approved record found for this enrollment ID.'
                ]
            ]);
        }
    }

    public function enquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ], [
            'g-recaptcha-response.required' => 'Please confirm you are not a robot.'
        ]);
    
        // Step 2: Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LfPLSQrAAAAAB8zry-vedlm6GEp4lJbLVFw73yl', // 🔐 Consider moving to .env
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);
    
        $responseBody = $response->json();
    
        if (!$responseBody['success']) {
            return back()->withErrors(['captcha' => 'reCAPTCHA validation failed. Please try again.'])->withInput();
        }
    
        // Step 3: Insert data into 'enquiry' table
        DB::table('enquiry')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Step 4: Return with success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully!');
    }


    public function frenchise(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Insert into DB
        $response = DB::table('frenchise')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->phone,
            'aadhar_card' => $request->aadhar_card,
            'district' => $request->district,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($response) {
            // Return with SweetAlert success
            return redirect()->back()->with('success', 'Details submitted successfully!');
        } else {
            return redirect()->back()->with('error', 'Details format Incorrect !');
        }
    }



    public function verify()
    {
        return view('frontend.verify');
    }

    public function payment()
    {
        return view('frontend.payment');
    }


    public function frechicy()
    {
        return view('frontend.frechicy');
    }
}
