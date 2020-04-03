<?php
$conn_string = "host=ec2-52-87-58-157.compute-1.amazonaws.com user=ubburogejmlcbx password=65e177cf7971cb19ac28ef95fafeef48d7bc1a60b61d245b2750a3da65262200 database=dnasclsedgf3r port=5432";
$dbconn = pg_connect($conn_string);
if (isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
$result = pg_result($dbconn, "select * from where tbl_user username= '".$username."' and password= '"  .$password. "'");
if(!$result)
{
  echo "Ngon rồi ^^";
  header('Location:../');
}
 else {
    echo 'Toang :(('; 
}
 ?>
