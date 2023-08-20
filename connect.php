<?php
$conn = mysqli_connect("localhost","root","","login");
if (!$conn) {
    # code...
    die ('not conneect');
}
else{
    echo "connect";
}
?>

