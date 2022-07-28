<?php

session_start();
include_once "config.php";
$output = '';
$sql = mysqli_query($conn, "SELECT * FROM users");
if (mysqli_num_rows($sql) == 1) {
    $output .="No users are available to chat";
} else if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
        $output .= '
            <a href="#">
                <div class="content">
                    <img src="images/'.$row["img"].'" alt="">
                    <div class="details">
                        <span>'.$row["fname"].'</span>
                        <p>This is test message</p>
                    </div>
                </div>
                <div class="status-dot offline"><i class="fas fa-circle"></i></div>
            </a> 
        ';
    }
}

echo $output;
