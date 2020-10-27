<?php
    include('connect.php');
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['meg'] = "You must login first";
        header('location: login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
   
?>
<?php 
    if(isset($_POST['save'])){
        $data = mysqli_real_escape_string($conn, $_POST['datacontents']);
        $data_2 = mysqli_real_escape_string($conn, $_POST['heading']);
        $sql = "INSERT INTO writeblog (datacontents, heading) VALUES ('$data','$data_2')";
        mysqli_query($conn,$sql);
        header("location: writeblog1.php");
    }
    else{
        header("location: writeblog1.php");
    }
?>