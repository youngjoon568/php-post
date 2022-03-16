<?php
$conn = mysqli_connect('localhost', 'root', '647505', 'abc_corp');
if (!$conn) {
    echo '<p>db에 연결하지 못했습니다.' . mysqli_connect_error() . '</p>';
} else {
    echo '<p>db에 접속했습니다.</p>';
}

$view_num = $_GET['number'];
$sql = "SELECT * FROM msg_board WHERE number = $view_num";
$result = mysqli_query($conn, $sql);
