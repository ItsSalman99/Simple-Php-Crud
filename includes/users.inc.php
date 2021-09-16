<?php

include_once './includes/config/db.inc.php';

$sql = 'Select * from users';
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}else {
    echo '0 Result !';  
}

?>