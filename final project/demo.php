<?php
   $msg ="";
   if(isset($_POST['registerbutton'])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     $conn = @mysqli_connect("localhost","root","","florifydb");
     if($conn==null){
      $msg ="<h2><font color = 'red';>connection failed !!!!</font></h2>";
     }
     else{
        $qry ="insert into users(name,email,password,role)values('$name','$email','$password','client')";
        mysqli_query("$conn","$qry");
        if(mysqli_affected_rows($conn)>0){
          $msg ="<h4><font color = 'green'>Account created successfully</font></h4>";

        }
        else{
           $msg ="<h4><font color = 'red'>Account not created!!!! ERROR (try again)</font></h4>";
        }
        mysqli_close($conn);
     }
   }
?>
