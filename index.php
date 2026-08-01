<?php
    $insert=false;
    $server="localhost";
    $username="root";
    $password="";
    $database="dbform";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con)
        {
            die("database connection failed" . mysqli_connect_error());
        }
       
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {

        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $studentid=$_POST['studentid'];
        $courses=$_POST['courses'];
        

     $my_sql= "INSERT INTO `tableform`( First_Name, Second_Name, Gender, Email, studentid, Courses) VALUES
('$fname', '$lname', '$gender', '$email', '$studentid', '$courses')";
if($con->query($my_sql)==true){
    
    $insert=true;
}
else{
    echo "ERROR: . $con->error";
}
$con->close();

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="imge">
      <img src="image3.avif" alt="main image" />
    </div>
    <div class="container">
      <form action="index.php" method="post">
      <h1><u>REGISTRATION FORM</u></h1>  
      <p id=reg>Fill out the form carefully for registration</p>

      <?php
      if($insert==true)
      {
       echo "<p class='msg'>Thanks for submitting your form.Best of luck!</p>" ;
      }
      ?>
      
      <h3>Student Name</h3>
      <div class="input1">
        <div class="first">
          <input type="text" name="fname" placeholder="Enter First Name" />
          <span>First name</span>
        </div>
        <div class="first">
          <input type="text" name="lname" placeholder="Enter last Name" />
          <span>Last Name</span>
        </div>
      </div>
      <div class="div2 input2">
        <h3>Gender</h3>
        <h3 id="email">Email</h3>
      </div>
      <div class="input1">
        <div class="first">
          <select id="gender" name="gender">
            <option value="" selected disabled>Please Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
          </select>
        </div>

        <div class="first">
          <input type="email" name="email" placeholder="abc@gmail.com" />
          <span id="email2">Exmaple:abc123@gmail.com</span>
        </div>
      </div>
      <div class="input3">
           <div class="div2 input2">
        <h3>Student ID</h3>
        <h3 id="courses">List of Courses</h3>
      </div>
      <div class="input1">
          <div class="first">
          <input type="number" name="studentid" placeholder="052005" />
        </div>

        <div class="first">
          <select id="gender" name="courses">
            <option value="" selected disabled>Please Select course</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
           <option value="BBA">BBA</option>
            <option value="Olevel">Olevel</option>
            <option value="PGDCA">PGDCA</option>
          </select>
        </div>
      </div>
    </div>
    <div class="btn">
      <button type="submit" name="submit">Submit</button> 
      <button type="reset"  id= "rst" name="reset">Reset</button>
    </div>
      </div>
      </form>
      
    

    
    
    
    
  </body>
</html>

