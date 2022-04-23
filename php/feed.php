<?php
 define('DB_SERVER','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','feed');
 $conn= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

 if(isset($_POST['submit'])){
     if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['topic']) && !empty($_POST['message'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sub=$_POST['topic'];
        $mess=$_POST['message'];

        $query = "insert into reg(name,email,subject,data) 
        values('$name','$email','$sub','$mess')";

        $run= mysqli_connect($conn,$query) or die(mysqli_error());

        if ($run){
            echo "form submitted successfully";
        }else{
            echo "form not submitted";
        }
        else{
            echo "all fields required";
        }
     }
 }


//  $conn = new mysqli('localhost','root','','feed');
//  if ($conn->connect_error){
//      die('Connection failed:'.$conn->connect_error);
//  }else{
//      $stmt = $conn->prepare("insert into reg(name,email,subject,data) values(?,?,?,?)");
//      $stmt->bind_param("ssss",$name,$email,$sub,$mess);
//      $stmt->execute();
//      echo "done";
//      $stmt->close();
//      $conn->close();
//  }
?>