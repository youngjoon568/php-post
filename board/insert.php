<?php
$title = "insert";
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

$user_name = $_POST['name'];
$user_msg = $_POST['message'];

$sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo '저장하지 못했습니다';
    error_log(mysqli_error($conn)); // 에러 로그 기록
} else {
    echo '저장되었습니다';
}

mysqli_close($conn);


print '<hr /><a href="./index.php">메인화면으로 이동하기</a>';

/*
insert 문법
insert into 테이블명(컬럼1, 컬럼2) values (컬럼1값, 컬럼2값);
*/
?>
<?php
include("../../html/btm.php");
?>