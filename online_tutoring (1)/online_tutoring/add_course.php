<?php 
    session_start();
    include 'sidebar.php';
    include 'configure.php';
    if(isset($_POST['submit'])){
        $cname = $_POST['name'];
        $class = $_POST['class'];
        $cost = $_POST['cost'];
        $tutorid = $_SESSION['id'];
        $sql = "insert into courses values(NULL,'$cname','$class','$cost','$tutorid')";
        // error_reporting(E_STRICT);
        if($res =mysqli_query($conn,$sql)){
            ?>
            <script>
                alert('Successfully Added!');
            </script>
            <?php 
        }
        else{
        ?>
        <script>
            alert('Incorrect details');
        </script>
        <?php 
        }
    }
?>
<style>
    .card-body *{
        font-size:18px;
    }
</style>
<body>
    <div class="card " style="width: 100%;background:#f6f6f6;">
        
        <div class="card d-block mx-auto outline m-5 " style="width: 70%;">
            
            <div class="card-body ">
                <h1 class="card-title">Course Details</h1>
                <form acttion="" method="post">
                    <div class="my-4 text frame-inline">
                        Course name
                        <input name="name" class="d-inline form-control mt-2" value="" required>
                    </div>
                    
                    <div class="my-4 text frame-inline">
                        Class
                        <select name="class" class="d-inline form-control mt-2">
                            <option value="11">select</option>
                            <option value="11">Class 11</option>
                            <option value="12">Class 12</option>
                        </select>
                        
                    </div>
                    <div class="my-4 text frame-inline">
                        Cost
                        <input name="cost" class="d-inline form-control mt-2" value="" >
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Add Course</button>
                    <!-- <button class="btn btn-outline-primary mx-2 "><a class="nav-link active" aria-current="page" href="student_login.php"><h4>Sign Up</h4></a></button> -->
                    
                </form>
            </div>
        </div>
    </div>
   
</body>