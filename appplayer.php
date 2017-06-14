
<?php
    $db=mysqli_connect("localhost","root","M@c142387956");
    mysqli_select_db( $db,"Danh_sach_cau_thu");
    $TEN=$_POST["nhap_ten"];
    $TUOI=$_POST["tuoi"];
    $VI_TRI=$_POST["vi_tri"];
    $LUONG=$_POST["tien_luong"];
    $sql="INSERT INTO danh_sach_cau_thu(TEN, TUOI, VI_TRI, LUONG) VALUES('$TEN','$TUOI','$VI_TRI','$LUONG')";
    mysqli_query($db,$sql);
    mysqli_close();
    echo("<a href='Danh_sach_cau_thu.php'> danh sach cau thu</a>");
?>
<html>
<head>
    <title>them danh sach cau thu</title>
</head>
<body>
    <h1>them cau thu</h1>
    <form action="them-danh-sach-cau-thu.php" method="POST">
        ten: <input type="text" name="nhap_ten"><br>
        tuoi: <input type="text" name="tuoi"><br>
        vi tri: <select name="vi_tri">
                    <option value="HAU VE">HAU VE</option>
                    <option value="THU MON">THU MON</option>
                    <option value="TIEN VE">TIEN VE</option>
                    <option value="TIEN DAO">TIEN DAO</option>
                </select><br>
        tien luong: <input type="text" name="tien_luong"><br>
        <input type="submit" name="" value="them cau thu">
        <input type="reset" value="nhap lai">
    </form>
</body>
</html>
