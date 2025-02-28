<!-- get data from header after user send info by submit btn by POST -->
<!-- after loginsuccess send to main_get in template -->
<!-- if login fail send to login get in template -->

<?php
$email = $_POST['email'];
$password = $_POST['password'];
$result = login( $email, $password);
if($result){
    $unix_timestamp = time();
    $_SESSION['timestamp'] = $unix_timestamp;
    $_SESSION['cid'] = $result['cid'];
    renderView('main_get', $result);
}else{
    $_SESSION['message'] = 'Email or Password invalid';
    renderView('login_get');
    unset($_SESSION['message']);
    unset($_SESSION['timestamp']);
}


