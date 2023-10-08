<?php

include("../db.php");
include "sidenav.php";
include "topheader.php";

if (isset($_SESSION['success'])) {
    echo "

<!-- End Navbar -->
<div class='content'>
    <div class='container-fluid'>

        <div class='row'>
            <div class='col-md-6'>
                <div class='header-search'>
                    <form action='' method='POST'>
                        <input class='input' id='search' name='search' type='text' placeholder='Enter the Full Name!'
                            style='border-radius:20px; width:60%;height:50px;padding-left:15px;'>
                        <button type='submit' id='search_btn' name='search_btn' class='search-btn'
                            style='border: none;background-color: unset;'></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- your content here -->
        <div class='row'>
            <div class='col-md-12'>
                <div class='card '>
                    <div class='card-header card-header-primary'>
                        <h4 class='card-title'>Total Vote</h4>
                    </div>

                    <div class='card-body'>
                        <div class='table-responsive ps'>
                            <table class='table table-hover tablesorter ' id=''>
                                <thead class=' text-primary'>
                                    <tr>
                                        <th>Candidate Id</th>
                                        <th>Candidate Name</th>
                                        <th>Total Vote</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>";
                              

                                    if (isset($_POST['search_btn'])) {
                                        $query = $_POST['search'];

                                        // Pagination configuration
                                        $recordsPerPage = 10; // Number of records to display per page
                                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                                        // Calculate the OFFSET for pagination
                                        $offset = ($currentPage - 1) * $recordsPerPage;

                                        // Prepare the search query with a placeholder
                                        $search_query = "SELECT * FROM total_vote WHERE candidate_name = ? LIMIT ? OFFSET ?";
                                        $stmt = mysqli_prepare($con, $search_query);
                                        mysqli_stmt_bind_param($stmt, 'sii', $query, $recordsPerPage, $offset);
                                        mysqli_stmt_execute($stmt);
                                        $run = mysqli_stmt_get_result($stmt);

                                        if (mysqli_num_rows($run) > 0) {
                                            while ($row = mysqli_fetch_array($run)) {
                                                $candidate_id = $row['candidate_id'];
                                                $candidate_name = $row['candidate_name'];
                                                $total_vote = $row['total_vote'];
                                                $date = $row['date'];

                                                echo "<tr>";
                                                echo "<td>$candidate_id</td>";
                                                echo "<td>$candidate_name</td>";
                                                echo "<td id='totalVote_$candidate_id'>$total_vote</td>";
                                                echo "<td>$date</td>";
                                                echo "<td><button onclick='editRow($candidate_id)' style='width: 60px;
                                                height: 40px;
                                                background-color: #c128e3;
                                                border: none;
                                                border-radius: 10px;
                                                color: white;
                                                font-size: larger;
                                                font-weight: bold;'>Edit</button></td>";
                                                echo "</tr>";
                                            }

                                            // Pagination links
                                            $totalRecords = mysqli_num_rows(mysqli_query($con, "SELECT * FROM total_vote WHERE candidate_name = '$query'"));
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

                                        $query = "SELECT * FROM total_vote LIMIT ? OFFSET ?";
                                        $stmt = mysqli_prepare($con, $query);
                                        mysqli_stmt_bind_param($stmt, 'ii', $recordsPerPage, $offset);
                                        mysqli_stmt_execute($stmt);
                                        $run = mysqli_stmt_get_result($stmt);

                                        if (mysqli_num_rows($run) > 0) {
                                            while ($row = mysqli_fetch_array($run)) {
                                                $candidate_id = $row['candidate_id'];
                                                $candidate_name = $row['candidate_name'];
                                                $total_vote = $row['total_vote'];
                                                $date = $row['date'];

                                                echo "<tr>";
                                                echo "<td>$candidate_id</td>";
                                                echo "<td>$candidate_name</td>";
                                                echo "<td id='totalVote_$candidate_id'>$total_vote</td>";
                                                echo "<td>$date</td>";
                                                echo "<td><button onclick='editRow($candidate_id)' style='width: 60px;
                                                height: 40px;
                                                background-color: #c128e3;
                                                border: none;
                                                border-radius: 10px;
                                                color: white;
                                                font-size: larger;
                                                font-weight: bold;'>Edit</button></td>";
                                                echo "</tr>";
                                            }

                                            $totalRecords = mysqli_num_rows(mysqli_query($con, "SELECT * FROM total_vote"));
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
                                   


echo "

                                </tbody>

                            </table>

                            <div class='ps__rail-x' style='left: 0px; bottom: 0px;'>
                                <div class='ps__thumb-x' tabindex='0' style='left: 0px; width: 0px;'></div>
                            </div>
                            <div class='ps__rail-y' style='top: 0px; right: 0px;'>
                                <div class='ps__thumb-y' tabindex='0' style='top: 0px; height: 0px;'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>";
}else{
    include 'login.php';
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
function editRow(candidate_id) {
    var totalVoteCell = document.getElementById("totalVote_" + candidate_id);
    var totalVoteValue = totalVoteCell.innerHTML;
    totalVoteCell.innerHTML = "<input type='text' value='" + totalVoteValue + "' onblur='saveTotalVote(" +
        candidate_id + ", this.value)'>";
}


function saveTotalVote(candidate_id, value) {
    var totalVoteCell = document.getElementById("totalVote_" + candidate_id);

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "./update.php?candidate_id=" + candidate_id + "&value=" + encodeURIComponent(value), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                totalVoteCell.innerHTML = value;
            } else {
                console.error("Request failed with status code " + xhr.status);
            }
        }
    };
    xhr.onerror = function() {
        console.error("Request failed");
    };
    xhr.send();

    console.log(value);
}
</script>