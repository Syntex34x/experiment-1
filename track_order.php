<?php
$orders = json_decode(file_get_contents('orders.json'), true);
$orderNo = $_POST['orderNo'];
foreach ($orders as $order) {
    if ($order['orderNo'] == $orderNo) {
        echo "Order Status: " . $order['status'];
        exit;
    }
}
echo "Order not found.";
?>
