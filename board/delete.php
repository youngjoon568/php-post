<?php
$title = "delete";
$str = "삭제 결과";
include("../../html/top.php");
?>
<?php
$conn = mysqli_connect('localhost', 'root', '647505', 'abc_corp');
if (!$conn) {
    echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
} else {
    echo 'db에 접속했습니다.';
}

$user_delnum = $_POST['delnum'];
$sqlDEL = "DELETE FROM msg_board WHERE number = $user_delnum";
mysqli_query($conn, $sqlDEL);

$sql = "SELECT * FROM msg_board";
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
<p>
    <?php
    echo "{$user_delnum}번 게시물이 삭제되었습니다.";
    ?>
</p>
<p><a href="./index.php">메인화면으로 이동하기</a></p>
<?php
include("../../html/btm.php");
?>