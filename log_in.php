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
  Password : <input type="pasword" name="pass"><br>
  
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
  ?>

  <?php 
    if($email == 'muin1@student.com' && $pass == '@@@1'){
        echo "Log In Successful";
        
    }
    else if($email == 'borhan2@student.com' && $pass == '@@@2'){
        echo "Log In Successful";
    
    }
    else if($email == 'mijanur3@student.com' && $pass == '@@@3'){
        echo "Log In Successful";
    
    }
    else if($email == 'taskina4@student.com' && $pass == '@@@4'){
        echo "Log In Successful";
    
    }
    else if($email == 'rajon5@student.com' && $pass == '@@@5'){
        echo "Log In Successful";
    
    }
    else if($email == 'sadia6@student.com' && $pass == '@@@6'){
        echo "Log In Successful";
    
    }
    else if($email == 'ramim7@student.com' && $pass == '@@@7'){
        echo "Log In Successful";
    
    }
    else if($email == 'niaz8@student.com' && $pass == '@@@8'){
        echo "Log In Successful";
    
    }
    else if($email == 'maidul9@student.com' && $pass == '@@@9'){
        echo "Log In Successful";
    
    }
    else if($email == 'sreya10@student.com' && $pass == '@@@10'){
        echo "Log In Successful";
    
    }
    else if($email == 'adiba11@student.com' && $pass == '@@@11'){
        echo "Log In Successful";
    
    }
    else if($email == 'nabila12@student.com' && $pass == '@@@12'){
        echo "Log In Successful";
    
    }
    else if($email == 'ronald13@student.com' && $pass == '@@@13'){
        echo "Log In Successful";
    
    }
    else if($email == 'tahnima14@student.com' && $pass == '@@@14'){
        echo "Log In Successful";
    
    }
    else if($email == 'abir15@student.com' && $pass == '@@@15'){
        echo "Log In Successful";


    } //teacher
    else if($email == 'tapan@teacher.com' && $pass == '@@@101'){
        echo "Log In Successful";
    
    }
    else if($email == 'atifur@teacher.com' && $pass == '@@@102'){
        echo "Log In Successful";
    
    }
    else if($email == 'ramesh@teacher.com' && $pass == '@@@103'){
        echo "Log In Successful";
    
    }
    else if($email == 'regia@teacher.com' && $pass == '@@@104'){
        echo "Log In Successful";
    
    }
    else if($email == 'johora@teacher.com' && $pass == '@@@105'){
        echo "Log In Successful";
    
    }
    
    else{
        echo "Wrong Information";
    }

  ?>

 </body>
 </html>
