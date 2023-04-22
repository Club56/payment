<?php

// STEP 1: Collect the required form data
$amount = $_POST['amount'];
$phone_number = $_POST['phone'];

// STEP 2: Generate a unique transaction ID
$transaction_id = uniqid();

// STEP 3: Prepare the data to be sent to the API
$data = array(
    'BusinessShortCode' => '9586889',
    'Password' => base64_encode('9586889'.'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919'.date("YmdHis")),
    'Timestamp' => date("YmdHis"),
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $amount,
    'PartyA' => $phone_number,
    'PartyB' => '9586889',
    'PhoneNumber' => $phone_number,
    'AccountReference' => 'ORD 19742055',
    'TransactionDesc' => 'SUBSCRIPTION FEE',
    'Remark' => ''
);

// STEP 4: Generate an access token
$consumer_key = 'U3kPkOFKRym5NhQLxfbOtoQm5GL7onO1';
$consumer_secret = 'mWe7dcSEsEGLkm4A';
$credentials = base64_encode($consumer_key.':'.$consumer_secret);

$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); // Set the Authorization header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result);
$access_token = $data->access_token;

// STEP 5: Send the STK push request to the API
$ch = curl_init('https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$access_token, 'Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$result = curl_exec($ch);
$data = json_decode($result);

// STEP 6: Process the response and display the appropriate message
if (isset($data->ResponseCode) && $data->ResponseCode == '0'){
    echo 'Payment request submitted successfully. You will receive a confirmation message shortly.';
} else {
    echo 'Payment request submission failed. Please try again later.';
}

?>
