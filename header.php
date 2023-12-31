<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Vote</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
    #navigation {
        background: #FF4E50;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F9D423, #FF4E50);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    #header {

        background: #780206;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #061161, #780206);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #061161, #780206);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    #top-header {


        background: #870000;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #190A05, #870000);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #190A05, #870000);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    #footer {
        background: #7474BF;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #348AC7, #7474BF);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        color: #1E1F29;
    }

    #bottom-footer {
        background: #7474BF;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #348AC7, #7474BF);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    .footer-links li a {
        color: #1E1F29;
    }

    .mainn-raised {

        margin: -7px 0px 0px;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

    }

    .glyphicon {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .glyphicon-chevron-left:before {
        content: "\f053"
    }

    .glyphicon-chevron-right:before {
        content: "\f054"
    }
    </style>

</head>

<body>
    <!-- HEADER -->
    <header>




        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container" style="width:100%;">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3" style="margin-left:100px;">
                        <div class="header-logo">
                            <a href="#" class="logo ">
                                <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                    Candidate Vote
                                </font>

                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">

                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <!-- <div class="col-md-3 clearfix">
                        <div class="header-ctn">


                            <div class="dropdown">
                                <a href="admin/add_photo.php">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Admin</span>

                                </a>

                            </div>



                        </div>
                    </div> -->
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>