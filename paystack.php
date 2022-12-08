<?php

if (isset($_POST['pay'])) {

  $email = $_POST['email'];
  $amount = $_POST['amount'];

  extract($_POST);

 // if (isset($_SESSION['email']) && $_SESSION['email'] != null) {
  //  if ($amount >= 100) {
      $curl = curl_init();
  
      $final_amount = ($amount * 100) + 5000;  //the amount in kobo. This value is actually NGN 300
  
      // url to go to after payment
      $callback_url = 'https://www.newszinc.com.ng/pay/callback.php';  
  
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
          'amount'=>$final_amount,
          'email'=>$email,
          'callback_url' => $callback_url
        ]),
        CURLOPT_HTTPHEADER => [
        "authorization: Bearer sk_test_3d33132d3b745bf2e523fd5955546640c9282598",
        //  "authorization: Bearer sk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
          "content-type: application/json",
          "cache-control: no-cache"
        ],
      ));
  
      $response = curl_exec($curl); 
      $err = curl_error($curl);
  
      if($err){
        // there was an error contacting the Paystack API
        die('Curl returned error: ' . $err);
      }
        
      $tranx = json_decode($response, true); 
        
      if(!$tranx['status']){
        // there was an error from the API
        print_r('API returned error: ' . $tranx['message']);
      }
      
      // comment out this line if you want to redirect the user to the payment page
      // print_r($tranx);
      // redirect to page so User can pay
      // uncomment this line to allow the user redirect to the payment page
      header('Location: ' . $tranx['data']['authorization_url']);
  //   } else {
  //     $message = '<div class="alert alert-danger" style="width: fit-content; margin: auto;">Minimum fundable amount must be N100!</div>';
  //   }
  // } else {
  //   $message = '<div class="alert alert-danger" style="width: fit-content; margin: auto;">An error occurred!</div>';
  // }
  
  
}
