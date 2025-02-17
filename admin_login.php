<?php
include './dbConnect.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin_tbl WHERE username = '$username' AND password = '$password'";
$res = $conn->query($sql);
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        echo ("<script>
        window.location.href='./admin_dashboard.php';
        </script>");
    }
}else{
    echo ("<script>
    window.alert('Please check email or password incorrect');
    window.location.href='./index.php';
    </script>");
}


?>