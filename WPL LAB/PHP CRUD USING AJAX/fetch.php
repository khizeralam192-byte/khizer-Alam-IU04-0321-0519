<?php
include 'connection.php';

$sql = "select * from stutbl";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['firstname']}</td>
            <td>{$row['email']}</td>
            <td><button class='btn btn-danger del-btn' data-id='{$row['id']}'>Delete</button></td>
          </tr>";
}
?>