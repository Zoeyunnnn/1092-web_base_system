<?php
session_start();
unset($_SESSION['account']);
echo "<meta http-equiv='refresh' content='2;url=index.php' />";