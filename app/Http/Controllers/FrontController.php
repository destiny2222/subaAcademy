<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Unicodeveloper\Paystack\Facades\Paystack;

class FrontController extends Controller
{
    private $program;
    private $price;

    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.services');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function faq(){
        return view('frontend.faqs');
    }

    public function program(){
        return view('frontend.program');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }


    public function term(){
        return view('frontend.terms');
    }

    public function enrollment(){
        return view('frontend.enrollment');
    }
    


    public function enrollmentStore(Request $request)
    {
        Session::put(['program' => $request->program, 'price' => $request->price, $request->specialization]);
        // $data['program'] = $this->program;
        // $data['price'] = $this->price;
        
    
        return redirect()->route('payment.index');
    }

    public function registrationPage(){
        $data['program'] = Session::get('program');
        $data['price'] = Session::get('price');
        $data['specialization'] = Session::get('specialization');
        // dd($data['program']);
        return view('frontend.payment', compact('data'));
    }

    

    
    // public function payment(){
    //     $data['program'] = session('program');
    //     $data['price'] = session('price');
    //     dd($data);
    //     return view('frontend.payment', compact('data'));
    // }
    


    public function success(){
        return view('frontend.success');
    }

    public function cancel(){
        return view('frontend.failed');
    }

}
