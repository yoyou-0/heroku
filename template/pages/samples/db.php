<?php
$pdo = new PDO ('mysql:dbname=1xUW9ATMAK;host=remotemysql.com','1xUW9ATMAK','surCRgjxjN');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
