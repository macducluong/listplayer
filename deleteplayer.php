<?php
    $host = "localhost";
    $username = "root";
    $password = "M@c142387956";
    $dbName = "Danh_sach_cau_thu";
    // ket noi
    $dbconn = new mysqli($host, $username, $password, $dbName);
    // kiem tra ket noi
    if ($dbconn->connect_error) {
        die("khong ket noi duoc: " . $dbconn->connect_error);
    }
    // lenh delete
    if(isset($_GET['id']) == 1) {
        $id = $_GET['id'];
    };
    $sql = "DELETE FROM danh_sach_cau_thu WHERE id = {$id}";
    // lenh truy van
    if($dbconn->query($sql)=== TRUE){
        echo "da xoa cau thu khoi danh sach";
    }else{
        echo "khong xoa duoc :".$dbconn->error();
    }
    // dong ket noi
    $dbconn->close();
?>