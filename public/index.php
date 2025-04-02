<?php
require_once '../config/database.php';
require_once '../includes/functions.php';
require_once '../classes/Product.php';

$db = new Database();
$product = new Product($db);
$featured_products = $product->getAll();

include '../includes/header.php';
?>

<div class="container">
    <h1>Welcome to <?php echo SITE_NAME; ?></h1>
    
    <h2>Featured Products</h2>
    <div class="product-grid">
        <?php foreach ($featured_products as $product): ?>
            <div class="product-card">
                <img src="<?php echo PRODUCT_IMG_PATH . $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo formatPrice($product['price']); ?></p>
                <button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?> 