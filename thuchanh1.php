<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
    <table border="7">
        <caption>
            <h1>Bộ Tộc C10-Full</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
    
    <?php
    $customerlist = array(
        "1" => array(
            "ten" => "Sùng A Hoàng",
            "ngaysinh" => "1991-11-17",
            "diachi" => "Nam Đông",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCM5EE-4322805a9abf-512"
        ),
        "2" => array(
            "ten" => "Glơ Beng Trí",
            "ngaysinh" => "1991-08-20",
            "diachi" => "A lưới",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCL666-75fba2c082f3-512"
        ),
        "3" => array(
            "ten" => "Bling Ốc Tân",
            "ngaysinh" => "1997-08-21",
            "diachi" => "Bình Điền",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPQNQ066M-d7054e40ec61-512"
        ),
        "4" => array(
            "ten" => "Klrot Chi Tiến",
            "ngaysinh" => "1995-04-22",
            "diachi" => "Bắc Giang",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ636QTNJ-0ecf3f55c5cb-512"
        ),
        "5" => array(
            "ten" => "Rơ Ngao Đông",
            "ngaysinh" => "1995-08-17",
            "diachi" => "A lưới",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPY6CEPEY-1b74f31dbeee-512"
        ),
        "6" => array(
            "ten" => "Thớp Pặt Nguyên",
            "ngaysinh" => "1997-01-23",
            "diachi" => "Nam Đông",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPQNQ0SJV-6763c3e16394-512"
        ),

        "7" => array(
            "ten" => "Nhiêng thớt Ngọc",
            "ngaysinh" => "1997-08-23",
            "diachi" => "Nam Đông",
            "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UKC14GFS6-f3779964e3bb-512"
        )
    );

    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }

    ?>
    </table>
</body>

</html>