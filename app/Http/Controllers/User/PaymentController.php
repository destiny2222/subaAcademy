<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Paystack;

class PaymentController extends Controller
{


   
    public function redirectToGateway(Request $request)
    {
        // Validate the request
        $validate = Validator::make($request->all(), [ 
            'program' => ['required','string'],
            'amount' => ['required', 'numeric'],
            'name' => ['required','string'],
            'email' => ['required', 'email'],
            'gender' => ['required','string'],
            'dob' => ['required', 'date'],
            'phone' => ['required','string'],
            'county' => ['required','string'],  
            'employment_status' => ['required','string'],
            'education_level' => ['required','string'],
        ]);
    
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
    
        try {
            // Create a new transaction
            $transaction = Transaction::create([
                'program'=> $request->input('program'),
                'amount'=> $request->input('amount'),
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'gender'=> $request->input('gender'),
                'dob'=> $request->input('dob'),
                'phone'=> $request->input('phone'),
                'country'=> $request->input('county'), 
                'employment_status'=> $request->input('employment_status'),
                'education_level'=> $request->input('education_level'),
                'specialization'=>$request->input('specialization'),
            ]);
    
            // Prepare payment data
            $paymentData = [
                'email' => $request->input('email'),
                'first_name' => $request->input('name'),
                'amount' => $request->input('amount') * 100, 
                'reference' => $request->input('reference'),  
                'currency' => 'NGN',
                'metadata' => [
                    'order_id' => $transaction->id,
                ],
                'customer' => [
                    'first_name' => $request->input('name'),
                ],
            ];
    
            // Redirect to Paystack
            return Paystack::getAuthorizationUrl($paymentData)->redirectNow();
    
        } catch (\Exception $e) {
            \Log::error('Paystack error: ' . $e->getMessage());  
            return Redirect::back()->withMessage(['msg' => 'An error occurred. Please try again.', 'type' => 'error']);
        }
    }
    
    

    /**
     * Obtain Paystack payment information
     * @return void
     */
   public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        if ($paymentDetails['status'] === true) {
            $orderId = $paymentDetails['data']['metadata']['order_id'];
            $transaction = Transaction::find($orderId);
            $transaction->payment_status = 1;
            $transaction->save();
            return redirect()->route('payment.success');
        } else {
           return redirect()->route('payment.failure');
        }
    }
}
