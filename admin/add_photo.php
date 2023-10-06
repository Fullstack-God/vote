<?php
session_start();
include("../db.php");
require_once '../vendor/autoload.php';


if(isset($_POST['btn_save']))
{
$voting_amount=$_POST['voting_amount']*100;
$description=$_POST['description'];
$candidate_name=$_POST['candidate_name'];


$stripe = new \Stripe\StripeClient('sk_test_51NtBMlKFUyNj0BfHYrtKvKzTL1kzFzfaKhxkEnWICxakaEv8rDwkt5hgqC7xW3GhUqB7t6PRuNrqd8g4QrlmY1aT00eHZdhD9v');
$product= $stripe->products->create([
  'name' => $candidate_name,
]);
$product_id = $product->id;

$price=$stripe->prices->create([
  'unit_amount' => $voting_amount,
  'currency' => 'usd',
  'product' => $product_id,
]);

$price_id=$price->id;



//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../photo_images/".$pic_name);
		
mysqli_query($con,"insert into photos (voting_amount, description,candidate_name, photo, product_id, price_id) values 
('$voting_amount','$description','$candidate_name','$pic_name','$product_id', '$price_id')") or die ("query incorrect");

echo "Product added successfully.";
}

mysqli_query($con,"insert into total_vote (candidate_name) values 
('$candidate_name')") or die ("query incorrect");

mysqli_close($con);
}

include "sidenav.php";
include "topheader.php";
?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-2">

                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h5 class="title">Add Photo</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Candidate Name</label>
                                        <input type="text" id="candidate_name" required name="candidate_name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="">Add Photo</label>
                                        <input type="file" name="picture" required class="btn btn-fill btn-success"
                                            id="picture">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" cols="80" id="description" required name="description"
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Voting Amount</label>
                                        <input type="text" id="voting_amount" name="voting_amount" required
                                            class="form-control">
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="card-footer">
                            <button type="submit" id="btn_save" name="btn_save" required
                                class="btn btn-fill btn-primary">Add Photo</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">

                </div>

            </div>
        </form>

    </div>
</div>