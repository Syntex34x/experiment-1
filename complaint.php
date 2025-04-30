<?php
$complaints = json_decode(file_get_contents('complaints.json'), true);
$orderNo = $_POST['orderNo'];
foreach ($complaints as $complaint) {
    if ($complaint['orderNo'] == $orderNo) {
        echo "Complaint Status: " . $complaint['status'];
        exit;
    }
}
echo "No complaint found for this order.";
?>
