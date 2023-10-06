<?php
require_once './vendor/autoload.php';

$price_id = $_GET['price'];
$candidate_name=$_GET['name'];							
                    
\Stripe\Stripe::setApiKey('sk_test_51NtBMlKFUyNj0BfHYrtKvKzTL1kzFzfaKhxkEnWICxakaEv8rDwkt5hgqC7xW3GhUqB7t6PRuNrqd8g4QrlmY1aT00eHZdhD9v');
header('Content-Type: application/json');


$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => $price_id,
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => "http://localhost/vote/success.php?session_id={CHECKOUT_SESSION_ID}&price=$price_id&name=$candidate_name",
  'cancel_url' => 'http://localhost/vote',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);