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
                <h2>Users </h2>
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">First</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select * from user';
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                $name = $row['name'];
                                $address = $row['address'];
                                $phone = $row['phone'];
                                $email = $row['email'];

                                echo
                                '
          <tr>
          <td>' . $name . '</td>
          <td>' . $address . '</td>
          <td>' . $phone . '</td>
          <td>' . $email . '</td>
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