<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function contact(Request $request)
    {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($request->name));
        $email = filter_var(trim($request->email), FILTER_SANITIZE_EMAIL);
        $message = htmlentities($request->message); 

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Build the email content.
        $data = [];
        $data['name'] = $name;
        $data['email'] = $email;
        $data['message'] = $message;

        try {

            Mail::to('me@nathaniel-david.tech')->send(new ContactMail($data));

            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thanks for reaching out! I'll be contacting you soon! I look forward to hearing about your project!";

        } catch (Exception $e) {

            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
            
        }
    }

    public function resume()
    {

        //PDF file is stored under project/public/download/info.pdf

        $file= public_path(). "/download/nathaniel_resume.pdf";

     

        $headers = [

          'Content-Type' => 'application/pdf',

       ];

         

        return response()->download($file, 'nathaniel_resume.pdf', $headers);

    }

}
