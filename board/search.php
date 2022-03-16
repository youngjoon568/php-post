<?php
$title = "search";
$str = "검색 결과";
include("../../html/top.php");
?>
<?php
$conn = mysqli_connect('localhost', 'root', '647505', 'abc_corp');
if (!$conn) {
    echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
} else {
    echo 'db에 접속했습니다.';
}

$user_skey = $_POST['skey'];
$sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
$result = mysqli_query($conn, $sql);
$list = '';
echo '<ul>';
while ($row = mysqli_fetch_array($result)) {
    $list = "<li>{$row['number']} : <a href=\"view.php?number={$row['number']}\" />{$row['name']}</a></li>";
    echo $list;
}
mysqli_close($conn);
echo '</ul>';
?>
<p><a href="./index.php">메인화면으로 이동하기</a></p>
<?php
include("../../html/btm.php");
?>