<?php 
    include 'navbar.php';
    include 'configure.php';
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "insert into student values(NULL,'$email','$phone','$class','$pass','$name')";
        $res = mysqli_query($conn,$sql);
        if($res){
            $sql = "select studentid from student where phone='$phone'";
            $res = mysqli_query($conn,$sql);
            $res1 = mysqli_fetch_assoc($res);
            $_SESSION['id'] = $res1['studentid'];
            $_SESSION['name'] = $res1['name'];
            $_SESSION['table']="student";
            header('Location:student_dashboard.php');
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
    <div class="card d-block mx-auto mt-2 " style="width: 60%">
        
        <div class="card outline m-3" style="width: auto;">
            
            <div class="card-body">
                <h2 class="card-title">Student Sign Up</h2>
                <form acttion="" method="post">
                    <div class="my-4 text frame-inline">
                        Your name
                        <input name="name" class="d-inline form-control" value="" >
                    </div>
                    <div class="my-4 text frame-inline">
                        Class
                        <select name="class" class="form-control">
                            <option value="11">select</option>
                            <option value="11">class 11</option>
                            <option value="12">class 12</option>
                        </select>
                    </div>
                    <div class="my-4 text frame-inline">
                        Phone number
                        <input name="phone" class="d-inline form-control" value="" >
                    </div>
                    <div class="my-4 text">
                        <label for="exampleInputEmail1" class="form-label form-inline">Email address</label>
                        <input name="email" class="d-inline form-control" value="" >
                       
                    </div>
                    <div class="my-4 text">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" class="form-control" id="exampleInputPassword1" value="">
                    </div>
                    <div class="my-4 text">
                        <a href="student_login.php" class="h6">Already have an account?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
                    <!-- <button class="btn btn-outline-primary mx-2 "><a class="nav-link active" aria-current="page" href="student_login.php"><h4>Sign Up</h4></a></button> -->
                    
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>