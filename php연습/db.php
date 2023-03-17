<?php
    header('Content-Type: text/html; charset=utf-8');

    // db주소,db계정아이디, db계정비밀번호,db이름
    $host = 'localhost';
    $username ='root';
    $password='01037578235';
    $dbname = 'jjang';
    $db = new mysqli("localhost","root","01037578235","jjang");
    $db ->set_charset("utf8");

    function mq($sql){
        global $db;
        return $db ->query($sql);
    }
    ?>