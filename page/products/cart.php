<?php
require '../../_base.php';
//-----------------------------------------------------------------------------

// ----------------------------------------------------------------------------
$_title = 'MY CART';
include '../../_head.php';
$is_logged_in = isset($_SESSION['user']);
?>

<div class="cart-container">
    <img src="image/cartPicture.jpg">
    <h1>YOUR CART IS EMPTY</h1>

    <?php 
    if ($is_logged_in) {
        echo "<p>Oops! You haven’t added an Epal Aifon yet. Check out the newest series and pick your favorite!</p>";
    } else {
        echo "<p>Login to your Epal account to view your saved items or continue shopping</p>";
    }
    ?>

    <div class="cartEmpty-buttons">
        <a href="../../index.php">Continue Shopping</a>

        <?php 
            if (!$is_logged_in) {
                echo '<a href="../member/login.php">Login</a>';
            }
        ?>
    </div>
</div>

<?php
include '../../_foot.php';