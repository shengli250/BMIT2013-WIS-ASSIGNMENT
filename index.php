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



<?php
include '_foot.php';
?>