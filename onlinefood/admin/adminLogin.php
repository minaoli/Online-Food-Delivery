

<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Login</title>
     <link rel="stylesheet" href="../style.css">
 </head>

 <body>

     <?php
     session_start();
        include_once '../connect.php';
        ?>
     <div class="loginPage">
         <div class="outer_login">
             <div class="login_inner">
                 <h2>Admin Login </h2>
                 <form method="post">
                     <div class="input">
                         <input type="email" required placeholder="Enter Email" name="email" require>
                     </div>
                     <div class="input">
                         <input type="password" required placeholder="Enter Password" name="password" require>
                     </div>
                     <div class="center_button">
                         <button type="submit">Login</button>

                     </div>
                 </form>
             </div>
         </div>
     </div>

     <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT id FROM admin_data WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($_SESSION['admin_id'] = $row['id']) {
                    echo '
<script>alert("Login Successful"); window.location.href = "adminDash.php";</script>';
                }
            } else {
                echo '
        <script>alert("Invalid Email or Password")</script>
        ';
            }
        }

        ?>

 </body>

 </html>