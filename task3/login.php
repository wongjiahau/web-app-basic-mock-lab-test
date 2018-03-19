<?php
if (!empty($_REQUEST)) {
    require('./conn.php');
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    $query = mysqli_query($con, "
        select count(*) as count from user
        where email='$email' and password='$password';
     ");
    $result = mysqli_fetch_assoc($query);
    if ($result['count'] == '1') {
        session_start();
        $_SESSION['current_user'] = $email;
        header('location: account.php');
        die;
    }
    echo "<b>Invalid email or password, please try again.</b><br/>";
}

?>
<html>
<body>
<form method='POST' action='login.php'>
    Email : <input name='email' type='text'><br/>
    Password :<input name='password' type='password'><br/>
    <input type='submit' value='LOGIN'>
</form>
</body>
</html>