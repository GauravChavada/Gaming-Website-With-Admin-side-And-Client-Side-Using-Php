<?php
session_start();
unset($_SESSION['a_email']);
unset($_SESSION['a_password']);
echo "<script>window.location.href='login_admin.php'</script>"
?>