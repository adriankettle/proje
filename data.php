<?php

$conn = mysqli_connect('localhost', 'root', '24Strawberry', 'busines');

$result = mysqli_query($conn, "SELECT * FROM merch");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);

 ?>
