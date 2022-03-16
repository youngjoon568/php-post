<?php
$title = "home";
$str = "글 목록";
include("../../html/top.php");
?>
<?php
$conn = mysqli_connect('localhost', 'root', '647505', 'abc_corp');
if (!$conn) {
    echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
} else {
    echo 'db에 접속했습니다.';
}

$sql = "SELECT * FROM msg_board";
$result = mysqli_query($conn, $sql);
$list = '';
echo '<ul>';
while ($row = mysqli_fetch_array($result)) {
    $list = "<li>{$row['number']} : <a href=\"view.php?number={$row['number']}\" />{$row['name']}</a></li>";
    echo $list;
}
echo '</ul>';
/*
    msg_board 테이블에서 글 조회
    전체 조회하기
    SELECT * FROM 테이블명

    php 출력 방식
    1. echo : 값 그대로 출력.
    2. print : 값 그대로 출력. 
    3. print_r : 배열, 객체 모양을 그대로 출력
    4. var_dump : 3번보다 더 상세하게 출력 

    echo, print $result; 에러 : result의 값이 string 으로 변환해서 출력할 수 있는 값이 아님
    print_r 결과 : mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 1 [type] => 0 )
    var_dump 결과 : object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) }

     */
?>
<hr />
<a href="./write.php">글 쓰기</a></p>
<hr />
<h2>글 검색</h2>
<form action="./search.php" method="post">
    <h3>검색할 키워드를 입력하세요</h3>
    <p>
        <label for="name" id="search">키워드 :</label>
        <input type="text" id="search" name="skey" />
    </p>
    <input type="submit" value="검색" />
</form>
<hr />
<h2>글 삭제</h2>
<form action="./delete.php" method="post">
    <h3>삭제할 메세지 번호를 입력하세요.</h3>
    <p>
        <label for="name" id="msgdel">번호 :</label>
        <input type="text" id="msgdel" name="delnum" />
    </p>
    <input type="submit" value="삭제" />
</form>
<?php
include("../../html/btm.php");
?>