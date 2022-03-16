<?php
$title = "updata";
$str = "글 수정";
include("../../html/top.php");
require('./connect.php');
?>
<?php if ($row = mysqli_fetch_array($result)) { ?>
    <form action="./insert_update.php" method="post">
        <input type="hidden" name="number" value="<?= $view_num ?>">
        <p>
            <label for="name">이름 :</label>
            <input type="text" id="name" name="name" value="<?= $row['name'] ?>" />
        </p>
        <p>
            <label for="name" id="message">메세지 :</label>
            <textarea name="message" id="message" cols="30" rows="10"><?= $row['message'] ?></textarea>
        </p>
        <input type="submit" value="글 쓰기" />
    </form>
<?php }
mysqli_close($conn); ?>
<?php
include("../../html/btm.php");
?>