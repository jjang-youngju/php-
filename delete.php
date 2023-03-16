<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";

    $number = $_GET['room_number'];

    $sql = mq("DELETE FROM room_management where room_number='$number';");
?>
<script type="text/javascript">alert("삭제완료");</script>
<meta http-equiv="refresh" content="0 url=/index.php" />