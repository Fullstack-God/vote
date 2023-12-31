<?php
session_start();

if (isset($_SESSION['success'])) {
    echo "

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <link rel='apple-touch-icon' sizes='76x76' href='../assets/img/apple-icon.png'>
    <link rel='icon' type='image/png' href='../assets/img/favicon.png'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <title>
        Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel='stylesheet' type='text/css'
        href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'>


    <link href='assets/css/material-dashboard.css?v=2.1.0' rel='stylesheet' />

    <link href='assets/demo/demo.css' rel='stylesheet' />
</head>

<body class='dark-edition'>
    <div class='wrapper '>
        <div id='sidebar' class='sidebar' data-color='purple' data-background-color='black'
            data-image='./assets/img/sidebar-2.jpg'>

            <div class='sidebar-wrapper'>
                <ul class='nav'>
                    <li class='nav-item active  '>
                        <a class='nav-link' href=''>
                            <i class='material-icons'>dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class='nav-item '>
                        <a class='nav-link' href='add_photo.php'>
                            <i class='material-icons'>add</i>
                            <p>Add Photo</p>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='vote_history.php'>
                            <i class='material-icons'>list</i>
                            <p>Vote History</p>
                        </a>

                    </li>



                    <li class='nav-item '>
                        <a class='nav-link' href='total_vote.php'>
                            <i class='material-icons'>library_books</i>
                            <p>Total Vote</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>";
    }
?>