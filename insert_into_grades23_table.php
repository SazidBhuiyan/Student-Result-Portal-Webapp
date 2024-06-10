<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <p> <?php include 'connection.php' ; ?></p>
 <?php $Student_ID; $Student_Name; $marks_bang; $marks_eng ; $marks_math; $marks_sci; $marks_soc; $marks_bus; $marks_eco; $avg_marks; $grade ; ?>
 <h4>Inser Student ID, Name and Marks to insert in the 'grades_23' table : </h4> 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Student ID : <input type="number" name="Student_ID"><br>
  Student Name : <input type="text" name="Student_Name"><br>
  Markes of Bangla : <input type="number" name="marks_bang"><br>
  Markes of English : <input type="number" name="marks_eng"><br>
  Markes of Mathematics : <input type="number" name="marks_math"><br>
  Markes of Science : <input type="number" name="marks_sci"><br>
  Markes of Social Studies : <input type="number" name="marks_soc"><br>
  Markes of Business Studies : <input type="number" name="marks_bus"><br>
  Markes of Economics : <input type="number" name="marks_eco"><br>

  <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $Student_ID = htmlspecialchars($_POST['Student_ID']);
    $Student_Name = htmlspecialchars($_POST['Student_Name']);
    $marks_bang = htmlspecialchars($_POST['marks_bang']);
    $marks_eng = htmlspecialchars($_POST['marks_eng']);
    $marks_math = htmlspecialchars($_POST['marks_math']);
    $marks_sci = htmlspecialchars($_POST['marks_sci']);
    $marks_soc = htmlspecialchars($_POST['marks_soc']);
    $marks_bus = htmlspecialchars($_POST['marks_bus']);
    $marks_eco = htmlspecialchars($_POST['marks_eco']);

    echo "<p>You entered Student ID : $Student_ID</p>";
    echo "<p>You entered Student Name : $Student_Name</p>";
    echo "<p>You entered marks of Bangla : $marks_bang</p>";   
    echo "<p>You entered marks of English : $marks_eng</p>";
    echo "<p>You entered marks of Mathematics : $marks_math</p>";
    echo "<p>You entered marks of Science : $marks_sci</p>"; 
    echo "<p>You entered marks of Social Studies : $marks_soc</p>";
    echo "<p>You entered marks of Business Studies : $marks_bus</p>";
    echo "<p>You entered marks of Economics : $marks_eco</p>"; 
  }
  
  $avg_marks =  ($marks_bang+ $marks_eng + $marks_math+ $marks_sci+ $marks_soc+ $marks_bus+ $marks_eco)/7; 
  echo "<p>The Average Mark is : $avg_marks</p>";

if($avg_marks>=90 && $avg_marks<=100)
  $grade= 'A+';
elseif($avg_marks>=80)
  $grade= 'A';
elseif($avg_marks>=70)
  $grade= 'B';
elseif($avg_marks>=60)
  $grade= 'C';
elseif($avg_marks>=50)
  $grade= 'D';
elseif($avg_marks<=0 && $avg_marks<50)
  $grade= 'F';
else
$grade= 'Invalid';
echo "<p>The Grade is : $grade</p>"; 
?>

 <!-- <p> <?php echo "Student ID : " . $student_ID ;?> </p> <br>
  <p> <?php echo "Student Name : " . $Student_Name ;?> </p>
  <p> <?php echo "Marks of Bangla : " . $marks_bang ;?> </p>
  <p> <?php echo "Marks of ID English : " . $marks_eng ;?> </p>
  <p> <?php echo "Marks of ID Mathematics: " . $marks_math ;?> </p>
  <p> <?php echo "Marks of Science : " . $marks_sci ;?> </p>
  <p> <?php echo "Marks of ID Social Studies: " . $marks_soc ;?> </p>
  <p> <?php echo "Marks of ID Business Studies : " . $marks_bus ;?> </p>
  <p> <?php echo "Marks of ID Ecomomics : " . $marks_eco ;?> </p>
  <p> <?php echo "Average Marks : " . $avg_marks ;?> </p>
  <p> <?php echo "Grades : " . $grade;?> </p> -->

<?php
//Insert into the existing table 
$sql = "INSERT INTO grades_23 
VALUES ('$Student_ID', '$Student_Name', '$marks_bang', '$marks_eng' , '$marks_math', '$marks_sci', '$marks_soc', '$marks_bus', '$marks_eco', '$avg_marks', '$grade')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  
</body>
</html>