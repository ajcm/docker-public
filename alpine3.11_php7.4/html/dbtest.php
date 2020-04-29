<?php include "dbinfo.php"; ?>
<html>
<body>
<h1>DB Configurations</h1>
<?php


try {

  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  $database = mysqli_select_db($connection, DB_DATABASE);

  mysqli_close($connection);

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


</body>
</html>
