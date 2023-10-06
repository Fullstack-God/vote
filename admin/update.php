<?php
include '../db.php';

$candidate_id=$_GET['candidate_id'];
$total_vote = $_GET['value'];

mysqli_query($con,"update total_vote set total_vote='$total_vote' where candidate_id='$candidate_id'") or die ("query incorrect");

mysqli_close($con);