<?php
if (isset($_SESSION['success'])) {
    echo "
<div class='main-panel'>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ' id='navigation-example'>
        <div class='container-fluid'>
            <div class='navbar-wrapper'>
                <div class='navbar-wrapper'>
                    <a class='navbar-brand' style='color: #fff;'>Welcome
                </div>

            </div>
            <button class='navbar-toggler' type='button' data-toggle='collapse' aria-controls='navigation-index'
                aria-expanded='false' aria-label='Toggle navigation' data-target='#navigation-example'
                onclick='sidebar()'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='navbar-toggler-icon icon-bar'></span>
                <span class='navbar-toggler-icon icon-bar'></span>
                <span class='navbar-toggler-icon icon-bar'></span>
            </button>
            <div class='collapse navbar-collapse justify-content-end'>
                <form class='navbar-form'>

                </form>
                <ul class='navbar-nav'>


                    <li class='nav-item'>
                        <a href='/vote'><i class='fa fa-sign-out' aria-hidden='true'></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function sidebar() {
            sidebar = document.getElementById('sidebar')
            sidebar.style.right = 'unset'
            sidebar.style.left = '-257px'
        }
    </script>";
    }
?>