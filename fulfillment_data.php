<?php
error_reporting(0);
header('Content-Type: application/json');

$data = [
    "fulfillmentStatus" => [
        "labels" => ["PO RAISED", "PO TO BE RAISED", "PENDING PUTAWAY", "CREATED", "READY_TO_SHIP", "PACKED"],
        "data" => [10, 5, 3, 80, 1, 6],
        "backgroundColor" => ["#3b82f6", "#ef4444", "#10b981", "#fbbf24", "#60a5fa", "#b91c1c"]
    ],
    "pendingShipments" => [
        "labels" => ["0-6", "6-12", "12-18", "18-24", "24+"],
        "data" => [0, 0, 0, 0, 650],
        "backgroundColor" => ["#3b82f6", "#3b82f6", "#3b82f6", "#3b82f6", "#3b82f6"]
    ],
    "pendingSaleOrders" => [
        "labels" => ["0-2", "2-4", "4-6", "6-8", "8-10", "10+"],
        "data" => [0, 0, 0, 0, 0, 1200],
        "backgroundColor" => ["#3b82f6", "#3b82f6", "#3b82f6", "#3b82f6", "#3b82f6", "#3b82f6"]
    ],
    "saleOrderFlow" => [
        "labels" => ["Step 1", "Step 2", "Step 3", "Step 4", "Step 5"],
        "data" => [100, 80, 60, 40, 20],
        "backgroundColor" => "#3b82f6"
    ]
];

echo json_encode($data);
exit;
?>
