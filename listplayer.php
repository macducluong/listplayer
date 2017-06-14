<?php
    $url = "mysql:host=localhost;dbname=Danh_sach_cau_thu";
    $user = "root";
    $password = "M@c142387956";
    $db = new PDO($url, $user, $password);
    $query = "SELECT * FROM danh_sach_cau_thu";
    $danh_sach_cau_thu = $db->query($query);
    $danh_sach_cau_thu=$danh_sach_cau_thu->fetchAll();
?>
<html>
    <head>
        <title></title>
        <style>
            th{
                text-align: left;
                width: 200px;
            }
            .delete{
                color: red;
                margin-right: 20px;
            }
        </style>

    </head>
        <body>
            <h1>danh sach cau thu</h1>
            <a href="them-danh-sach-cau-thu.php">them cau thu</a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>TEN</th>
                    <th>TUOI</th>
                    <th>VI TRI</th>
                    <th>TIEN LUONG</th>

                </tr>
            <?php
                foreach($danh_sach_cau_thu as $values){
            ?>
                        <tr>
                            <td><?= $values["id"] ?></td>
                            <td><?= $values["TEN"] ?></td>
                            <td><?= $values["TUOI"] ?></td>
                            <td><?= $values["VI_TRI"] ?></td>
                            <td><?= $values["LUONG"] ?></td>
                            <td><a href="xoa_cau_thu.php" class="delete">DELETE</a></td>
                            <td><a href="sua-thong-tin-cau-thu.php">UPDATE</a></td>
                        </tr>
            <?php
                }
            ?>
            </table>
        </body>
</html>