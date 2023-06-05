<html>
<head>
</head>
<body>
<?php
   
    if(isset($_POST['submit']))
    {
        $sid = $_POST['sid'];
        $sname = $_POST['sname'];
        $sgender = $_POST['sgender'];
        $sage = $_POST['sage'];
       
    }

   
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

$con = mysqli_connect($host, $username, $password, $dbname);

  
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO sdetail (sid, sname, sgender, sage) VALUES ('$sid', '$sname', '$sgender','$sage')";
  
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }

    mysqli_close($con);

?>
</body>
</html>