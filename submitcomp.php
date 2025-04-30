<?php
$complaints = json_decode(file_get_contents('complaints.json'), true);
$orderNo = $_POST['orderNo'];
$complaint = $_POST['complaint'];
$newComplaint = array('orderNo' => $orderNo, 'complaint' => $complaint, 'status' => 'Open');
array_push($complaints, $newComplaint);
file_put_contents('complaints.json', json_encode($complaints));
echo "Complaint submitted successfully.";
?>
