<?php
require '../../_base.php';
//-----------------------------------------------------------------------------

// ----------------------------------------------------------------------------
$_title = 'LOGIN PAGE';
include '../../_head.php';
?>

<form class="form-login" method="POST">
    <label>Enter your username:</label><br>
    <input type="text" id="username" name="Username"><br>
    <label>Enter your password:</label><br>
    <input type="text" id="password" name="Password"><br>
    <button type="submit">Submit</button><br>
    <a href="register.php">New to this site? Create an account here!</a>

</form>

<?php
include '../../_foot.php';