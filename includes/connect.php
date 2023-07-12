<?php

$con = mysqli_connect('localhost', 'root', '', 'mystore');
if ($con) {
    echo "Connection successful";
} else {
    die(mysqli_error($con));
}

?>
 