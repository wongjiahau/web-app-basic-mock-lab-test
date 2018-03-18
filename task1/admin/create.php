<?php
require('./report_error.php');
require('./conn.php');
if (!empty(($_POST["subject"]))) {
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    $type = $_REQUEST["type"];
    $posted = date("Y-m-d h:m:s");
    $query = "insert into announcement(subject, message, type, posted)
        values ('$subject','$message','$type', '$posted');
     ";
    mysqli_query($con, $query);
    header('Location: index.php');
    die;
}
?>
<html>
<body>
    <form action="create.php" method="POST">
        Subject <input type="text" name="subject" id="_subject"><br/>
        Message <input type="text" name="message" id="_message"><br/>
        Type <select name="type">
            <option value="P">Project Updates</option>
            <option value="T">Traffic Accouncement</option>
        </select><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>