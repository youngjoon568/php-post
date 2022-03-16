<?php
require('./connect.php');
$title = "view";
$str = "글 내용";
include("../../html/top.php");
?>
<?php
if ($row = mysqli_fetch_array($result)) {
?>
    <h3>글번호: <?= $row['number'] ?> / 작성자: <?= $row['name'] ?></h3>
    <div>
        <?= $row['message'] ?>
    </div>
<?php }
mysqli_close($conn); ?>
<hr />
<p><a href="./index.php">메인화면으로 이동하기</a></p>
<p><a href="./update.php?number=<?= $row['number'] ?>">수정하기</a></p>
<?php
include("../../html/btm.php");
?>