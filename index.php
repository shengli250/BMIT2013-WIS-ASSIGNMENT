<?php
require '_base.php';
//-----------------------------------------------------------------------------

// ----------------------------------------------------------------------------
$_title = 'Index';
include '_head.php';
?>

<h1>Redirecting you to login page...</h1>

<?php
redirect('page/member/login.php');
?>

<?php
include '_foot.php';