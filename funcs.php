<?php

// ここから...重複している'try{}'パーツを関数化して、アカウント名変更などが生じた時に管理しやすくする

function db_conn(){
    try {
        $db_name = 'gs_db3'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
        // 'return'をつけることで、関数の外でも'$pdo'の指示を出せるようにする
        return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}
// ここまで...重複している'try{}'パーツを関数化して、アカウント名変更などが生じた時に管理しやすくする

function redirect($file_name)
{
    header('Location: $file_name');
    exit();
}
