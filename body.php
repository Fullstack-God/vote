<?php
// Check if alert parameter is present in the URL
if (isset($_GET['alert'])) {
    $alertType = $_GET['alert'];
    $message = '';

    // Set the alert message based on the alert type
    if ($alertType === 'success') {
        $message = 'Operation completed successfully.';
    } elseif ($alertType === 'error') {
        $message = 'An error occurred.';
    }

    // Display the alert using JavaScript
    echo "<script>alert('$message');</script>";
}
?>


<div class="main main-raised">


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container" style="width:80%">
            <!-- row -->
            <div class="row" style="display: flex; flex-direction: column; justify-content: center;">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Candidates</h3>

                    </div>
                </div>
                <!-- /section title -->

                <div class="col-md-12 mainn mainn-raised">
                    <div class="row">

                        <?php
                            include 'db.php';
                            
                            // Define the number of items per page
                            $itemsPerPage = 12;

                            // Get the current page number
                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                            // Calculate the offset for the query
                            $offset = ($currentPage - 1) * $itemsPerPage;

                            // Query to retrieve the paginated data
                            $photo_query = "SELECT * FROM photos LIMIT $offset, $itemsPerPage";
                            $run_query = mysqli_query($con, $photo_query);

                            if (mysqli_num_rows($run_query) > 0) {
                                while ($row = mysqli_fetch_array($run_query)) {
                                    $pro_id    = $row['photo_id'];
                                    $pro_cat   = $row['voting_count'];
                                    $pro_detail = $row['description'];
                                    $pro_title = $row['candidate_name'];
                                    $pro_price = $row['voting_amount'];
                                    $pro_image = $row['photo'];
                                    $price_id = $row['price_id'];

                                    echo "
                                        <div class='col-md-3'>
                                            <div class='product'>
                                                <a href='checkout.php?price=$price_id&name=$pro_title' target='_blank'>
                                                    <div class='product-img'>
                                                        <img src='photo_images/$pro_image' style='max-height: 380px;' alt=''>
                                                    </div>
                                                </a>
                                                <div class='product-body'>
                                                    <h3 class='product-name header-cart-item-name'>$pro_title</h3>
                                                    <h5 class='product-name header-cart-item-name'>$pro_detail</h5>
                                                    <div class='product-rating'>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }       
                            }
                    ?>


                    </div>
                </div>
                <?php
                 // Pagination links
                    $totalItems = mysqli_num_rows(mysqli_query($con, "SELECT * FROM photos"));
                    $totalPages = ceil($totalItems / $itemsPerPage);

                    echo "<div class='pagination' style='justify-content: center; display: flex;align-items: stretch;'>";
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
                ?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->




</div>