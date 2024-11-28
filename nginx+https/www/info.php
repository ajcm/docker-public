<?php include "dbsettings.php"; ?>
<html>
<body>
<h1>DB Configurations</h1>
<?php


try {

  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $database = mysqli_select_db($connection, DB_DATABASE);



}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}


?>

<!-- Display table data. -->
<table border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td>SERVER</td>
    <td>USER</td>
    <td>PASSWORD</td>
    <td>DATABASE</td>
  </tr>
  <tr>
    <td><?= DB_SERVER?></td>
    <td><?= DB_USERNAME?></td>
    <td>n/a</td>
    <td><?= DB_DATABASE?></td>
  </tr>

</table>


<h3> System info </h3>

<!-- Display table data. -->
<table border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td></td>
    <td>Name</td>
    <td>Desc</td>

  </tr>


<?php

	$result = mysqli_query($connection, "SELECT * FROM dbinfo");

	while($query_data = mysqli_fetch_row($result)) {
		  echo "<tr>";
		    echo "<td>",$query_data[0], "</td>",
			           "<td>",$query_data[1], "</td>",
				          "<td>",$query_data[2], "</td>";
		    echo "</tr>";
	}
?>
</table>

</body>
</html>

<!-- Clean up. -->
<?php

	  mysqli_free_result($result);
	  mysqli_close($connection);

?>
