<?php
require 'connection.php';

$result = mysqli_query($con,"SELECT * FROM polygon");
$row = mysqli_fetch_all($result);


echo json_encode($row);

?>