<?php
$title = "write";
$str = "글 입력";
include("../../html/top.php");
?>
<form action="./insert.php" method="post">
    <p>
        <label for="name">이름 :</label>
        <input type="text" id="name" name="name" />
    </p>
    <p>
        <label for="name" id="message">메세지 :</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </p>
    <input type="submit" value="글 쓰기" />
</form>
<?php
include("../../html/btm.php");
?>