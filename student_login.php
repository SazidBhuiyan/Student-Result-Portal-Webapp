<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<p> <?php include 'connection.php' ; ?></p>

 <?php $email; $pass ;?>
 <h4>Insert Email and Passw : </h4> 

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Email : <input type="email" name="email"><br>
  Password : <input type="password" name="pass"><br>
  
  <input type="submit" value="Log In">
  </form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);

    echo "<p> Email : $email</p>";
    echo "<p> Password : $pass</p>";   
  }

  $sql = "SELECT * FROM student ";
  $result = mysqli_query($conn, $sql);
  $success= false;
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row["Email"] == $email && $row["Password"]==$pass) {
        $success = true;
  }

  if ($success==true) {
    echo "Login Successful";
  }
  else {
     echo "Login Failed";
  }

  ?>

  $sql = SELECT 

 </body>
 </html>
