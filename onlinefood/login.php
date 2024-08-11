<?php
include_once './header.php';
?>
<?php
include_once './connect.php';
?>
<div class="loginPage">
    <div class="outer_login">
        <div class="login_inner">
            <h2>Login </h2>
            <form method="post">
                <div class="input">
                    <input type="email" required placeholder="Enter Email" name="email" require>
                </div>
                <div class="input">
                    <input type="password" required placeholder="Enter Password" name="password" require>
                </div>
                <div class="center_button">
                    <button type="submit">Login</button>
                    <p><a href="./register.php">Not Register ?</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once './footer.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT user_id FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($_SESSION['id'] = $row['user_id']) {
            echo '
<script>alert("Login Successful"); window.location.href = "index.php";</script>';
        }
    } else {
        echo '
        <script>alert("Invalid Email or Password")</script>
        ';
    }
}

?>