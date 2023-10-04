<?php
require_once "./Classes.php";

$publications = array();
$connect = mysqli_connect('localhost', 'root', '', 'classes');
$sql = 'SELECT * FROM `publications`';
if(mysqli_connect_errno()){
    echo 'connect error';
}else{
    $result= mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)){
        $publications[] = new $row['type']($row);
    }

}
