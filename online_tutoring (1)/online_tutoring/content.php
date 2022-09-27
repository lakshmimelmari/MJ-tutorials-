<?php 
    session_start();
    include 'sidebar.php';
    include 'resource.php';
    include 'configure.php';
    $courseid = $_GET['courseid'];
    $sql = "select *from courses where courseid='$courseid'";
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_fetch_assoc($result);

    if(isset($_POST['submit'])){
        $resources = $_POST['resource'];
        
        $sql = "insert into course_contentes values('$courseid','$resources')";
        $res = mysqli_query($conn,$sql);
        if($res){
            ?>
            <script>
                alert('Updated details');
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
    <div class="card d-block m-5   " style="width: 100%;">
        
        <div class="card outline m-5" style="width: auto;">
            
            <div class="card-body">
                <h2 class="card-title h1">Add resource</h2>
                <form acttion="" method="post">
                    <div class="my-4 text frame-inline">
                        Class
                        <select name="class" class="form-control">
                            
                            <option value="">
                                <?php
                                    echo htmlentities($result1['class']);
                                ?>
                            </option>
                        </select>
                    </div>
                    
                    <div class="my-4 text frame-inline">
                        Subject Name
                        <select name="cname" class="form-control">
                            <option value="">
                            <?php
                                    echo htmlentities($result1['name']);
                                ?>
                            </option>
                        </select>
                    </div>
                    <div class="my-4 text">
                        resource link
                        
                        <input name="resource" class="d-inline form-control" value="" >
                       
                    </div>
  
                    <button type="submit" class="btn btn-primary" name="submit">ADD resource</button>
                    <!-- <button class="btn btn-outline-primary mx-2 "><a class="nav-link active" aria-current="page" href="student_login.php"><h4>Sign Up</h4></a></button> -->
                    
                </form>
            </div>
        </div>
    </div>
    
</body>