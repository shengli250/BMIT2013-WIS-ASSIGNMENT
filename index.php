<?php
require '_base.php';
//-----------------------------------------------------------------------------
if (isset($_GET['redirect']) && $_GET['redirect'] === 'login') {
    $_title = 'Redirecting...';
    include '_head.php';
    echo "<h1>Redirecting you to login page...</h1>";
    redirect('page/member/login.php');
    exit;
}
// ----------------------------------------------------------------------------
$_title = 'Epal Offical Store';
include '_head.php';
?>

<div class="poster">
    <img src="image/posterphone.jpg">
</div>

<div class="container">
    <div class="product">
        <img src="image/aifon14.jpg" alt="iPhone 14">
        <h3>iPhone 14</h3>
        <p>Price: RM999.00</p>
    </div>
    <div class="product">
        <img src="image/aifon15.jpg" alt="iPhone 15">
        <h3>iPhone 15</h3>
        <p>Price: RM1099.00</p>
    </div>
</div>



<?php
include '_foot.php';
?>