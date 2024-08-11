<?php

include_once './header.php';
?>

<div class="register_page">
    <div class="outter_register">

  
    <div class="inner_register">
        
    <form method="post">
    <h2 style="text-align: center;">Register</h2>
    <div class="input">
        <input type="text" name="name" placeholder="Enter Your Name" pattern="[A-Za-z\s]+" title="Only alphabetical characters are allowed">
    </div>
    <div class="input">
        <input type="text" name="address" placeholder="Enter Your address" required>
    </div>
    <div class="input">
        <input type="text" name="phone" placeholder="Enter Your Number" pattern="[0-9]+" title="Only numerical digits are allowed">
    </div>
    <div class="input">
        <input type="email" name="email" placeholder="Enter Your Email" required>
    </div>
    <div class="input">
    <input type="password" name="password" placeholder="Enter Password" pattern=".{3,}" title="Password must be at least 3 characters long" required>


    </div>
    <div class="center_button">
        <button type="submit">Register</button>
        <p><a href="./login.php">Already Login?</a></p>
    </div>
</form>
    </div>
    </div>
</div>
<?php
include_once './footer.php';
?>
<?php
include_once './connect.php'
?>
<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `user`( `name`, `address`, `phone`,`email`, `password`) VALUES ('$name','$address','$phone','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Register Successfully"); window.location.href="index.php";</script>';
    }
    else{
        echo '<script>alert("Invalid Input"); window.location.href="register.php";</script>';
    }
 

}
?>