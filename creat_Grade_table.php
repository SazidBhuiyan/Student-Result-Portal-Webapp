<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

 <p> <?php include 'connection.php' ; ?></p>

 <!-- <?php $table_name ;?>
<h4>Enter Table Name  : </h4>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

     Table Name : <input type="text" name="table_name"><br>

    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $table_name = htmlspecialchars($_POST['table_name']);

    echo "<p>You entered Table Name : $table_name</p>";
  }
  ?>  -->
  

<?php 

$sql = "CREATE TABLE grades_24 (
    ID INT(6) PRIMARY KEY,
    Student_Name VARCHAR(30) NOT NULL,
    Bangla INT(3) NOT NULL,
    English INT(3) NOT NULL,
    Mathematics INT(3) NOT NULL,
    Science INT(3) NOT NULL,
    Social_Studies INT(3) NOT NULL,
    Business_Studies INT(3) NOT NULL,
    Economics INT(3) NOT NULL,
    Average_Marks INT(3) NOT NULL,
    Grades INT(3) NOT NULL
    )";
   // $result = mysqli_query($conn, $sql);
    
    //if ($conn->query($sql) === TRUE) {
      if (mysqli_query($conn, $sql)) {
     $message = "Table created successfully"; 
    } else {
      $message = "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?> 

    <p> <?php echo $message ?> </p>

</body>
</html>






