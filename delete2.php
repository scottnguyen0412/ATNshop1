<?php
   $host_heroku = "ec2-34-233-114-40.compute-1.amazonaws.com";
			$db_heroku = "d63vsqeg1u1bhr";
			$user_heroku = "vcljjiechthrbs";
			$pw_heroku = "91e24a4f6c609d6e3bd3c33019a26933d378b76f8e8c58956c617060bdf2bc12";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop2 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://atnshop-khoi.herokuapp.com/login2.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>
