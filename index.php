<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<section class="hero">
    <div class="container">
        <h2>Welcome to Our Shop</h2>
        <p>Quality products and exceptional service</p>
    </div>
</section>

<section class="products">
    <div class="container">
        <h2>Our Products</h2>

        <div class="product-grid">

        <?php
        $result = $conn->query("SELECT * FROM products");

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>

            <div class="product-card">
                <img src="<?php echo $row['image']; ?>" alt="">
                <h3><?php echo $row['name']; ?></h3>
                <p>₹<?php echo $row['price']; ?></p>
                <p><?php echo $row['description']; ?></p>
            </div>

        <?php
            }
        } else {
            echo "<p>No products found</p>";
        }
        ?>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>