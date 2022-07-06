<?php 
session_start();
session_unset();
session_destroy();

echo "<h2><a href='index.php'>Back</a></h2>";
?> 