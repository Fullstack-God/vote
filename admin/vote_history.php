<?php
session_start();
include("../db.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$voter_id=$_GET['voter_id'];

/*this is delet query*/
mysqli_query($con,"delete from orders where voter_id='$voter_id'")or die("delete query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0; 
}
else
{
$page1=($page*10)-10; 
}

include "sidenav.php";
include "topheader.php";

?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="header-search">
                    <form action="" method="POST">
                        <input class="input" id="search" name="search" type="text" placeholder="Enter the Full Name!"
                            style="border-radius:20px; width:60%;height:50px;padding-left:15px;">
                        <button type="submit" id="search_btn" name="search_btn" class="search-btn"
                            style="border: none;background-color: unset;"></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- your content here -->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Vote History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ps">
                            <table class="table table-hover tablesorter " id="">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Voter Id</th>
                                        <th>Candidate Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if (isset($_POST['search_btn'])) {
                                            $query = mysqli_real_escape_string($con, $_POST['search']);

                                            // Pagination configuration
                                            $recordsPerPage = 10; // Number of records to display per page
                                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                                            // Calculate the OFFSET for pagination
                                            $offset = ($currentPage - 1) * $recordsPerPage;

                                            // Fetch the records with pagination
                                            $search_query = "SELECT * FROM voter WHERE candidate_name = '$query' LIMIT $recordsPerPage OFFSET $offset";
                                            $run = mysqli_query($con, $search_query) or die("Query incorrect");

                                            if (mysqli_num_rows($run) > 0) {
                                                while ($row = mysqli_fetch_array($run)) {
                                                    $voter_id = $row['voter_id'];
                                                    $candidate_name = $row['candidate_name'];
                                                    $email = $row['email'];
                                                    $price_id = $row['price_id'];
                                                    $date = $row['date'];

                                                    echo "<tr>";
                                                    echo "<td>$voter_id</td>";
                                                    echo "<td>$candidate_name</td>";
                                                    echo "<td>$email</td>";
                                                    echo "<td>$date</td>";
                                                    echo "</tr>";
                                                }

                                                // Pagination links
                                                $totalRecords = mysqli_num_rows(mysqli_query($con, "SELECT * FROM voter WHERE candidate_name = '$query'"));
                                                $totalPages = ceil($totalRecords / $recordsPerPage);
                                                echo "<div class='pagination' style='justify-content:center;'>";
                                                if ($currentPage > 1) {
                                                    echo "<a href='?page=" . ($currentPage - 1) . "' style=' font-size: x-large;
                                                    margin-right: 20px;' >&laquo; Previous</a>";
                                                }
                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                    echo "<a href='?page=" . $i . "'" . ($currentPage == $i ? " class='active'" : "") . " style=' font-size: x-large;
                                                    margin-right: 20px;'>" . $i . "</a>";
                                                }
                                                if ($currentPage < $totalPages) {
                                                    echo "<a href='?page=" . ($currentPage + 1) . "' style=' font-size: x-large;
                                                    margin-right: 20px;'>Next &raquo;</a>";
                                                }
                                                echo "</div>";
                                            } else {
                                                echo "No results found.";
                                            }
                                        } else {
                                            // Pagination configuration
                                            $recordsPerPage = 10; // Number of records to display per page
                                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                                            // Calculate the OFFSET for pagination
                                            $offset = ($currentPage - 1) * $recordsPerPage;

                                            // Fetch all records with pagination
                                            $query = "SELECT * FROM voter LIMIT $recordsPerPage OFFSET $offset";
                                            $run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($run) > 0) {
                                                while ($row = mysqli_fetch_array($run)) {
                                                    $voter_id = $row['voter_id'];
                                                    $candidate_name = $row['candidate_name'];
                                                    $email = $row['email'];
                                                    $price_id = $row['price_id'];
                                                    $date = $row['date'];

                                                    echo "<tr>";
                                                    echo "<td>$voter_id</td>";
                                                    echo "<td>$candidate_name</td>";
                                                    echo "<td>$email</td>";
                                                    echo "<td>$date</td>";
                                                    echo "</tr>";
                                                }

                                                // Pagination links
                                                $totalRecords = mysqli_num_rows(mysqli_query($con, "SELECT * FROM voter"));
                                                $totalPages = ceil($totalRecords / $recordsPerPage);
                                                echo "<div class='pagination' style='justify-content:center;'>";
                                                if ($currentPage > 1) {
                                                    echo "<a href='?page=" . ($currentPage - 1) . "' style=' font-size: x-large;
                                                    margin-right: 20px;' >&laquo; Previous</a>";
                                                }
                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                    echo "<a href='?page=" . $i . "'" . ($currentPage == $i ? " class='active'" : "") . " style=' font-size: x-large;
                                                    margin-right: 20px;'>" . $i . "</a>";
                                                }
                                                if ($currentPage < $totalPages) {
                                                    echo "<a href='?page=" . ($currentPage + 1) . "' style=' font-size: x-large;
                                                    margin-right: 20px;'>Next &raquo;</a>";
                                                }
                                                echo "</div>";
                                            } else {
                                                echo "No results found.";
                                            }
                                        }
                                        ?>




                                </tbody>

                            </table>

                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>