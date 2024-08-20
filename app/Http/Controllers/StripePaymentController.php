<?php
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $input = $request->all();
    dd($input);
    // \Stripe\Stripe::setApiKey('sk_test_51KoMA2SAP179qJWOPFx4iPsg6LWLOmOzDP2A1eoCvMIqrc0Sv855cjS1gcQduZamejxoePCQex5mxqyy6AsdNbMf00hY5aIJg2');
    // $charge = \Stripe\Charge::create([
    //     'source'=> $_POST['stripeToken'],  
    //     'description' => "10 cucumbers from Roger\"s Farm",
    //     'amount'=> 2000,
    //     'currency'=>'usd'
      
    // ]);
    // dd($charge);
    }
}