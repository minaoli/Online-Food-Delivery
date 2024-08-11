<?php
include_once './layout.php';
include_once '../connect.php';
?>
<?php
include_once './checkLogin.php';
?>
<div class="dashboard_pages">
    <div class="dashboard_top">

    </div>
    <div class="dashboard">
        <div class="dashboard_left">
            <?php
            require './adminnav.php';
            ?>
        </div>
        <div class="dashboard_right">
            <h1>Contact Details</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql='select * from contact_form';
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while ($row=mysqli_fetch_assoc($result)) {
         $id=$row['id'];
         $name=$row['name'];
         $address=$row['address'];
         $phone=$row['phone'];
         $message=$row['message'];
echo '
<tr> 
<td>'.$id.'</td>
<td>'.$name.'</td>
<td>'.$address.'</td>
<td>'.$phone.'</td>
<td>'.$message.'</td>

</tr>
';

        }
    }
    ?>
  </tbody>
</table>
        </div>
    </div>
</div>
</body>

</html>