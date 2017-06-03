<?php
$conn = mysqli_connect("localhost", "centy", "51r c3nt7", "iforms");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

?>