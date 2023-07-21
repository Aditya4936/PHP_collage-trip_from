<?php
$insert=false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);
if (!$con) {
   die("connection to this database failed due to". mysqli_connect_error());
}
// echo "success connecting to the database"
$name =$_POST['name'];
$age =$_POST['age'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];

$sql ="INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `gender`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$email', '$gender', '$phone', '$desc', current_timestamp());";

 if($con->query($sql)==true) {
    // echo " successfuly inserted";
    $insert= true;
 }
 else{
    echo"Error:$sql <br> $con->error";
    
 }
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel From</title>
    
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="bg.jpg" alt="" srcset="" class="bgimg">
    <div class="container">
      <h1>Welcome to Marwadi University USA Trip Form</h1>
      <p>
        Enter your details and submit form to conform your participation in the
        trip
      </p>
      <?php
      if ($insert == true){
     echo "<p class='submit'>Thank you for submit your form.we will see you in USA</p>";
      }
      ?>
     
      <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="number" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your Information"></textarea>
            <button class="button">Submit</button>


        </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>

