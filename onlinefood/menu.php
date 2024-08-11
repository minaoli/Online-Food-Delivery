 <?php
    include_once './header.php';
    ?>

<?php
include_once './connect.php';
?>
 <div class="menu_page">
     <!-- -----features Products -->
     <h2>Menus</h2>
     <div class="menu_row">

     <?php
$sql='select * from products';
$result=mysqli_query($conn,$sql);
if($result)
{
    while ($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
     $name=$row['name'];
     $price=$row['price'];
     $image=$row['image'];

     echo'
     <div class="menu_col">
     <div class="image">
         <img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="">
     </div>
     <div class="content">
         <p>'.$name.'</p>
         <p>*******</p>
         <p>'.$price.'</p>
         <button data-id="'.$id.'" class="shop_btn">Shop Now</button>
     </div>
 </div>
     ';

    }
}
     ?>
      
      
         
     </div>
 </div>

<?php
include_once './footer.php';
?>