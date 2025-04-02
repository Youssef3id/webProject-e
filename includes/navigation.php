<nav>
    <ul>
        <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
        <li><a href="<?php echo SITE_URL; ?>/products.php">Products</a></li>
        <li><a href="<?php echo SITE_URL; ?>/cart.php">Cart</a></li>
        <?php if (isLoggedIn()): ?>
            <li><a href="<?php echo SITE_URL; ?>/account.php">My Account</a></li>
            <li><a href="<?php echo SITE_URL; ?>/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="<?php echo SITE_URL; ?>/login.php">Login</a></li>
            <li><a href="<?php echo SITE_URL; ?>/register.php">Register</a></li>
        <?php endif; ?>
    </ul>
</nav> 