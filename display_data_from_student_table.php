<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include 'connection.php'; ?>
  <h3>Enter Student ID : </h3>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" id="data" name="data">
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $S_ID = htmlspecialchars($_POST['data']);
    echo "<p>You entered: $S_ID</p>";
  }
  ?>

  <?php
  //include 'connection.php';
  $std_ID = $S_ID;

  $sql = "SELECT * FROM student WHERE Student_ID= $std_ID";
  $result = $conn->query($sql);
  
  
  while ($row = mysqli_fetch_assoc($result)) {
    $student_ID = $row["Student_ID"];
    $name = $row["Name"];
    $gender = $row["Gender"];
    $department = $row["Department"];
    $dob =  $row["Date_of_birth"];
    $email = $row["Email"];
    $pass = $row["Password"];
  }

  $conn->close();

  ?>
  <p> <?php echo "Student_ID : " .$student_ID; ?> </p>
  <p> <?php echo "Name : " .$name; ?> </p>
  <p> <?php echo "Gender : " . $gender; ?> </p>
  <p> <?php echo "Department" . $department; ?> </p>
  <p> <?php echo "Date of Birth : ".$dob; ?> </p>
  <p> <?php echo "Email : " . $email; ?> </p>
  <p> <?php echo "Password : " .  $pass; ?> </p>
</body>

</html>