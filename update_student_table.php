<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<p> <?php include 'connection.php' ; ?></p>

 <?php $student_ID; $col_name; $new_value ;?>
 <h4>Insert Student ID, Column Name and New Value : </h4> 

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Student ID : <input type="number" name="student_ID"><br>
  Column Name : <input type="text" name="col_name"><br>
  New Value : <input type="text" name="new_value"><br>
  
  <input type="submit" value="Submit">
  </form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $student_ID = htmlspecialchars($_POST['student_ID']);
    $col_name = htmlspecialchars($_POST['col_name']);
    $new_value = htmlspecialchars($_POST['new_value']);

    echo "<p>You entered Student ID : $student_ID</p>";
    echo "<p> Column Name (Field to be changed) : $col_name</p>";
    echo "<p> New Value: $new_value</p>";   
  }
  ?>

 <?php

//$sql = ("UPDATE student SET" . "$col_name" . "= " .'$new_value' . "WHERE Student_ID =  '$student_ID' ");

$allowed_columns = ['Student_ID', 'Student_Name', 'Gender', 'Department', 'Date_of_birth', 'Email', 'Password'];
if (!in_array($col_name, $allowed_columns)) {
    die('Invalid column name');
}

$sql = "UPDATE student SET $col_name = '$new_value' WHERE Student_ID = '$student_ID'";

 if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
 } else {
   echo "Error updating record: " . $conn->error;
 }

 $conn->close();
?> 

</body>
</html>