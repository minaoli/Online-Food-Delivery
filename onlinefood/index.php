<?php
include_once "./header.php";
?>
<?php
include_once "./connect.php";
?>



<div class="row">
    <div class="col-2">
        <h1>Online Food Ordering System</h1>
        <p>
            "Discover endless possibilities at Shopfinity, the premier online shopping destination. Browse a
            vast selection of products, enjoy secure transactions, and experience seamless shopping from the
            comfort of your home."</p>
        <a href="" class="btn">Exployer Now &#10132;</a>
    </div>
    <div class="col-2">
        <img src="https://www.kopatech.com/images/blogs/factors-which-influence-the-consumer-to-use-an-online-food-delivery-system.jpg" alt="">
    </div>
</div>
</div>
</div>
<div class="menu_page">
    <!-- -----features Products -->
    <h2>Letest Product</h2>
    <div class="menu_row">
        <?php
        $query = 'select * from products limit 4';
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $price = $row['price'];
                $image = $row['image'];
                echo '
        <div class="menu_col">
        <div class="image">
        <img
        src="data:image/jpeg;base64,' . base64_encode($image) . '"
        alt="image"
        >        </div>
        <div class="content">
            <p>' . $name . '</p>
            <p class="stars">*******</p>
            <p>' . $price . '</p>
            <button data-id="' . $id . '" class="shop_btn">Shop Now</button>
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