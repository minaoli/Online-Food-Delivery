<?php

include_once './header.php';
include_once './connect.php';

?>

 

<div class="about_page">
    <h1>About Page</h1>
    <div class="about_row">
        <div class="about_left">
            <div class="image">
                <img src="https://img.freepik.com/free-vector/delivery-staff-ride-motorcycles-shopping-concept_1150-34879.jpg" alt="">
            </div>
        </div>
        <div class="about_right">
            <div class="text_content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, veritatis itaque? Ut assumenda nulla totam quasi nemo quia, deserunt ipsa aliquid quod ex mollitia dolore cupiditate accusamus explicabo vel voluptas unde ipsam voluptate, veniam quae sint eveniet, corrupti expedita nihil! Debitis nostrum veniam fugiat cupiditate quasi quod et sunt nesciunt architecto. Adipisci a laboriosam corrupti dolore voluptate, soluta ex eveniet laborum, nobis sequi excepturi assumenda eum molestiae sunt animi voluptatibus temporibus tempora? Praesentium asperiores quis autem nihil officiis voluptas suscipit est pariatur voluptate similique, harum totam! Adipisci dolores quam veritatis aspernatur inventore eos dolor incidunt sed, possimus harum aut optio.
            </div>
        </div>
    </div>

    <div class="contact_outer">

        <div class="contact_container">

            <form method ='POST'>
                <h2>Contact Us</h2>
                <div class="input">
                    <input type="text" name="name" placeholder="Enter Your Name">
                </div>
                <div class="input">
                    <input type="text" name="address" placeholder="Enter Address">
                </div>
                <div class="input">
                    <input type="text" name="phone" placeholder="Enter Phone">
                </div>
                <div class="input">
                    <textarea  name="message" placeholder="Message" id="" cols="20" rows="5"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

include_once  './footer.php';
?>

<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="insert into contact_form (name,address,phone,message) values('$name','$address','$phone','$message')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo '
        <script>alert("Thanks You for Send Feedback");</script>
        ';
    } 


}
?>