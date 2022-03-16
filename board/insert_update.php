<?php
$title = "insert_updata";
$str = "글 저장";
include("../../html/top.php");
?>
<?php
$conn = mysqli_connect('localhost', 'root', '647505', 'abc_corp');
if (!$conn) {
    echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
} else {
    echo 'db에 접속했습니다.';
}

$number = $_POST['number'];
$user_name = $_POST['name'];
$user_msg = $_POST['message'];

$sql = "UPDATE msg_board SET name  = '$user_name', message = '$user_msg' WHERE number = '$number'";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo '<p>수정하지 못했습니다</p>';
    error_log(mysqli_error($conn));
} else {
    echo '<p>수정되었습니다</p>';
}

mysqli_close($conn);


print '<hr /><a href="./index.php">메인화면으로 이동하기</a>';
?>
<?php
include("../../html/btm.php");
?>