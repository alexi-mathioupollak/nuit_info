<?php
session_name('nuitexpress');
session_start();
session_destroy();

header('Location: ./index.php');
exit;


?>