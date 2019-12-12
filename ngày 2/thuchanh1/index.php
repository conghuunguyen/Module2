<?php
$customer_list = array(
    "1" => array("name" => "Nguyễn Công Hữu", "day_of_birth" => "1995/12/07", "address" => "hương chữ", "profile" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL0D1GQ-51f5d001bdb7-512"),
    "2" =>array("name" => "Nguyễn Chí Tiến", "day_of_birth" => "1995/02/23", "address" => "đặng huy trứ", "profile" => "https://ca.slack-edge.com/TEZB2M9GC-UQ636QTNJ-0ecf3f55c5cb-512"),
    "3" =>array("name" => "Lế Hữu Hoàng", "day_of_birth" => "1991/11/16", "address" => "huế", "profile" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCM5EE-4322805a9abf-512"),
    "4" =>array("name" => "Trần Minh Trí", "day_of_birth" => "1991/08/17", "address" => "phú bài", "profile" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCL666-75fba2c082f3-512"),
    "5" =>array("name" => "Phan Văn Đông", "day_of_birth" => "1995/06/27", "address" => "sịa", "profile" => "https://ca.slack-edge.com/TEZB2M9GC-UPY6CEPEY-1b74f31dbeee-512")
);
// tạo mảng khách hàng
function searchByDate($customers, $from_date, $to_date) {
    if(empty($from_date) && empty($to_date)){
        return $customers;
    }
    $filtered_customers = [];
    foreach($customers as $customer){
        if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;
        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
?>
<!-- // tạo hàm tìm kiếm searchbydate với các tham số $customer, $from_date và $to_date  -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
        $from_date = NULL;
        $to_date = NULL;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $from_date = $_POST["from"];
            $to_date = $_POST["to"];
        }
        $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
    ?>
    <!-- gọi hàm tìm kiếm ($from_date và $to_date từ form và gọi hàm search khách hàng) -->
        <form method="post">
          Từ: <input id = "from" type="date" name="from" placeholder="yyyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>"/>
          Đến: <input id = "to" type="date" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($to_date)?$to_date:''; ?>"/>
          <input type = "submit" id = "submit" value = "Search"/>
        </form>
        <!-- tạo các nút input -->

        <table border="0">
          <caption><h2>Danh sách khách hàng</h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php foreach($filtered_customers as $index=> $customer): ?>
            <tr>
                <td><?php echo $index + 1;?></td>
                <td><?php echo $customer['name'];?></td>
                <td><?php echo $customer['day_of_birth'];?></td>
                <td><?php echo $customer['address'];?></td>
                <td><div class="profile" ><img src="<?php echo $customer['profile'];?>"/></div> </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <!-- hiển thị danh sách khách hàng -->
</body>
</html>