<?php
if($_POST["Name"]) {
    mail("tdt62@nau.edu", "$_POST['Name'] Requested Appointment on $_POST['date']",
    $_POST['Type'], "From: american_request@americanunited.com");
}
?>