<?php
require '../../_base.php';
include "../../config/db.php";
// ----------------------------------------------------------------------------

if (is_post()) {    // Detect if data is sent by POST method
    
    $username  = req('username');
    $password  = req('password');
    $password2 = req('password2');
   
    $_err = [];
    // Validate username
    if ($username == '') {
        $_err['username'] = 'Required';
    }
    elseif (strlen($username) > 20) {
        $_err['username'] = 'Maximum length 20';
    }
    elseif (!preg_match('/^[A-Za-z0-9]+$/', $username)) {
        $_err['username'] = 'Invalid format';
    }


    // Validate password
    if ($password == '') {
        $_err['password'] = 'Required';
    }
    else if (strlen($password) < 6){
        $_err['password'] = 'Password to short';
    }
    
    // Validate second password
    if ($password2 == '') {
        $_err['password2'] = 'Required';
    }
    elseif ($password != $password2) {
        $_err['password2'] = 'Password does not match';
    }


    // Output
    if (empty($_err)) { // Use empty() instead of negating an array
        temp('info', "Submitted $username, $password"); // Fixed missing quote

        $data = (object)compact('username', 'password');
        temp('data', $data);
        redirect('login.php');
    }
    
}

// ----------------------------------------------------------------------------
$_title = 'REGISTER';
include '../../_head.php';
?>

<form method="post" class="form">
    <label for="username">Username</label>
    <?= html_reqtext('username', 'maxlength="20"') ?>
    <?= err('username') ?>
    <br>

    <label>Password</label>
    <?= html_password('password') ?>
    <?= err('password') ?>
    <br>

    <label>Password Again</label>
    <?= html_password('password2') ?>
    <?= err('password2') ?>
    <br>

    <section>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </section>
</form>

<a href="login.php">Return to login</a>


<?php
include '../../_foot.php';