<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function who_we_are()
    {
        return view('frontend.who-we-are');
    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }

    public function blog_list()
    {
        $blogs = Blog::paginate(10);
        return view('frontend.blog-list', compact('blogs'));
    }

    public function blog_details($id)
    {
        $blog = Blog::where('uuid', $id)->first();
        return view('frontend.blog-detail', compact('blog'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function service_details()
    {
        return view('frontend.service-detail');
    }

    public function our_values()
    {
        return view('frontend.our-values');
    }

    public function store_contact_us(Request $request)
    {
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back();
    }
}
