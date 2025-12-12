<?php
session_start();
isset($_SESSION['auth']);
session_destroy();

header('location:index.php');



?>