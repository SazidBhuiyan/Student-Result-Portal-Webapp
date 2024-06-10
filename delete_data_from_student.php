<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Data</title>
</head>
<body>
 <p> <?php include 'connection.php' ; ?></p>
 <?php $Student_ID ;?>
<h4>Enter Student ID  : </h4>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 

   Student ID  : <input type="number" name="Student_ID"><br>

    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $Student_ID = htmlspecialchars($_POST['Student_ID']);

    echo "<p>You entered : $Student_ID</p>";
  }
  ?>

<?php

$sql = "DELETE FROM student  WHERE Student_ID = $Student_ID ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>