<?php
include_once './layout.php';
?>
<?php
include_once '../connect.php';
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
            <div class="user_data_show">
                <h2>Orders Data </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order_id</th>
                            <th scope="col">Product</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Order_Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $sql = "SELECT o.id, u.name, p.name, o.quantity, o.date 
                        FROM orders AS o 
                        INNER JOIN user AS u ON o.u_id = u.user_id 
                        INNER JOIN products AS p ON o.p_id = p.id";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $customer = $row['name'];
                                $product = $row['name'];
                                $quantity = $row['quantity'];
                                $date = $row['date'];
                                echo
                                '
          <tr>
          <td>' . $id . '</td>
          <td>' . $product . '</td>
          <td>' . $customer . '</td>
          <td>' . $quantity . '</td>
          <td>' . $date . '</td>
          ';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>