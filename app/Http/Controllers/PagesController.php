<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;

use Mail;

class PagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
	
    public function home()
	{
		return view('page.home');
	}
	
	public function about()
	{
		return view('page.about');
	}
	
	public function domestic()
	{
		return view('page.domestic');
	}
	
	public function commercial()
	{
		return view('page.commercial');
	}
	
	public function details()
	{
		return view('page.details');
	}
	
	public function exterior()
	{
		return view('page.exterior');
	}
	
	public function testimonials()
	{
		return view('page.testimonials');
	}
	
	public function create()
	{
		return view('page.contact');
	}
	
	public function sendEmail(ContactFormRequest $request)
	{
		$input = $request->all();
		
		Mail::send('email.contact', $input, function($message)
   		{
       		$message->from('george@quick-elec.co.uk', 'Quick-Elec');
			$message->subject('RE: enquiry');
       		$message->to('george@quick-elec.co.uk');
   		});
		
		return Redirect()->back()->with('message', 'Thanks for contacting us!'); 
     
	}
}
