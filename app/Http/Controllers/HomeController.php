<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

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

    public function career()
    {
        return view('frontend.career');
    }

    public function why_us()
    {
        return view('frontend.why-us');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }

    public function contact_us_list(Request $request)
    {
        if ($request->ajax()) {
            $contracts = ContactUs::all();
            return DataTables::of($contracts)
                ->make(true);
        }
        return view('contact_us.index');
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

    public function legal_1()
    {
        return view('frontend.legal_1');
    }
    public function legal_2()
    {
        return view('frontend.legal_2');
    }
    public function legal_3()
    {
        return view('frontend.legal_3');
    }
    public function legal_4()
    {
        return view('frontend.legal_4');
    }

    public function service_details_1()
    {
        return view('frontend.service-detail-1');
    }
    public function service_details_2()
    {
        return view('frontend.service-detail-2');
    }
    public function service_details_3()
    {
        return view('frontend.service-detail-3');
    }
    public function service_details_4()
    {
        return view('frontend.service-detail-4');
    }
    public function service_details_5()
    {
        return view('frontend.service-detail-5');
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
        // Send email
        Mail::raw(
            "Nouveau message reçu depuis le formulaire de contact :\n\n" .
                "Nom : {$request->name}\n" .
                "Email : {$request->email}\n" .
                "Sujet : {$request->subject}\n\n" .
                "Message :\n{$request->message}",
            function ($message) use ($request) {
                $message->to('contact@agape-nantes.fr')
                    ->subject('Nouveau message du formulaire de contact');
            }
        );
        return back();
    }
}
