<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Omnipay\Omnipay;




class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);//Altere para false em produção
    }

    /**
     * Call a view.
     */
    public function index()
    {
        return view('payment');
    }


    public function pay(Request $request){

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();
            if($response->isRedirect()){
              $response->redirect();
            }
            else{
                return $response->getMessage();
            }
        } catch (\Throwable $th){
             return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $payment = new Payment;
                $payment->payment_id = $arr_body['id'];
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr_body['state'];
                $payment->save();

                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }

    public function error()
    {
        return 'User cancelled the payment.';
    }
}
