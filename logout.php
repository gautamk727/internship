<?php
session_start();
session_destroy();
echo "<script>window.open('admin_login.php?logout=You successfully Logged out,Come back soon!','_self')</script>";

?>