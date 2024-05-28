<?php
define ("db_SERVER", "localhost");
define ("db_USER", "root");
define ("db_PASSWORD", "");
define ("db_DBNAME", "costumers_reviews");
$con = mysqli_connect(db_SERVER,db_USER,db_PASSWORD,db_DBNAME);
if (!$con){
    die("failed: " .mysqli_connect_error());
}

$costumer_name = $_POST['costumer_name'];
$costumer_review = $_POST['costumer_review'];


$sql = "INSERT INTO reviews (costumer_name,costumer_review ) VALUES ('$costumer_name','$costumer_review')";

if(mysqli_query($con, $sql)){
    echo "Thank you for your review";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>