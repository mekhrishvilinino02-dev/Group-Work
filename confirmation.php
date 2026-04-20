<?php 
include 'header.php'; 

$name = $_POST['full_name'] ?? $_POST['patient_name'] ?? 'Guest';
$type = isset($_POST['full_name']) ? "message" : "appointment";

if ($type == "message") {
    echo "<div class='container mt-5'><h1>Your $type for $name is submitted.</h1></div>";
} else {
    echo "<div class='container mt-5'><h1>თქვენი ჯავშანი მიღებულია $name-ის სახელზე.</h1></div>";
}

include 'footer.php'; 
?>