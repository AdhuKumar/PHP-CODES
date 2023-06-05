<?php
require 'connect.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORM IN PHP</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
                Registeration Form
            </div> <br>
            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname">
                </div> <br>
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname">
                </div> <br>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div> <br>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone">
                </div> <br>
                <div class="input_field" name="gender">
                    <label>Gender</label> <br>
                    <label>Male</label>
                    <input type="radio" class="input" name="Gender" value="Male">
                    <label>Female</label>
                    <input type="radio" class="input" name="Gender" value="Female">
                </div> <br>
                 
                <div class="input_field">
                    <label>Address</label> <br>
                    <textarea class="textarea" name="address"></textarea>
                </div>    <br> 
                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
            </div>
            </form>
        </div>
    </body>
    </html>
<?php
   if($_POST["register"]){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $mail=$_POST['email'];
    $gender=$_POST['Gender'];
    $phone=$_POST['phone'];
    $add=$_POST['address'];

    $query="INSERT INTO FORMS VALUES('$first_name','$last_name','$mail','$gender','$phone','$add')";
    $data=mysqli_query($conn,$query);
    if($data){
        echo  "DATA INSERTED INTO DB!"  ;
    }
    else{
        echo "FAILED!";
    }
   }
?>