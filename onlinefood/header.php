<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="header" style="background-color: rgb(60, 9, 243)">
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <h2>Food Order</h2>
                </div>
                <nav>
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./menu.php">Menus</a></li>
                        <li><a href="./about.php">About</a></li>

                        <?php
                        session_start();
                        if (isset($_SESSION['id'])) {
                            echo '<li><a href="./logout.php">LogOut</a></li>';
                        } else {
                            echo '
                            <li><a href="./login.php">Login</a></li>
                            <li><a href="./register.php">Register</a></li>
                            ';
                        }
                        ?>




                    </ul>
                </nav>
            </div>
        </div>
    </div>