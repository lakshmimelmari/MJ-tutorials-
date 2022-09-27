<?php
    session_start();
    include 'configure.php';
    include 'sidebar.php';
    $courseid = $_GET['courseid'];
    
    $studentid = $_SESSION['id'];
    $date = date("Y-m-d");
    $sql = "select *from registered_students where studentid='$studentid' and courseid='$courseid'";
    $result = mysqli_query($conn,$sql);
    if($res=mysqli_fetch_assoc($result)){
        echo "<h1>"."Already Enrolled"."</h1>";
        ?>
        <script>
            alert('Already Enrolled');
        </script>
        <?php 
    }else{
        $sql = "insert into registered_students values ('$studentid','$courseid','$date')";
        $res = mysqli_query($conn,$sql);
        echo "<h1>"."Succesfully Enrolled"."</h1>";
        ?>
        <script>
            alert('Succesfully Registered');
        </script>
        <?php 
        
    }
    
    


?>