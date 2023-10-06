<?php
require 'vendor/autoload.php';
include("./db.php");



$stripe = new \Stripe\StripeClient('sk_test_51NtBMlKFUyNj0BfHYrtKvKzTL1kzFzfaKhxkEnWICxakaEv8rDwkt5hgqC7xW3GhUqB7t6PRuNrqd8g4QrlmY1aT00eHZdhD9v');

try {
  $session = $stripe->checkout->sessions->retrieve($_GET['session_id']);
  $customer = $session->customer_details->email;
  http_response_code(200);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}
$price_id=$_GET['price'];
$candidate_name=$_GET['name'];

mysqli_query($con,"insert into voter (candidate_name,email, price_id) values 
('$candidate_name','$customer', '$price_id')") or die ("query incorrect");

// Redirect to another page with success message
header("Location: /vote?alert=success");
exit();