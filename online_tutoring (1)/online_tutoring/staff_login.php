<?php 
    include 'navbar.php';
    include 'configure.php';
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "select *from tutor where email = '$email' and password='$pass'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)){
            $sql = "select * from tutor where email='$email'";
            $res = mysqli_query($conn,$sql);
            $res1 = mysqli_fetch_assoc($res);
            
            echo $res1['tutorid'];
            $_SESSION['id'] = $res1['tutorid'];
            $_SESSION['name'] = $res1['name'];
            $_SESSION['table'] = "tutor";
            header('Location:staff_dashboard.php');
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
<body>
    <div class="card d-block mx-auto mt-5 " style="width: 50%">
        
        <div class="card outline m-3" style="width: auto;">
            
            <div class="card-body">
                <h2 class="card-title">Staff Login</h2>
                <form acttion="" method="post">
                    <div class="my-4 text">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" class="form-control" value="" >
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="my-4 text">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" class="form-control" id="exampleInputPassword1" value="">
                    </div>
                    <div class="my-4 text">
                        <a href="forget_pass.php" class="h6">Forget password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                    <!-- <button class="btn btn-outline-primary mx-2 "><a class="nav-link active" aria-current="page" href="student_login.php"><h4>Sign Up</h4></a></button> -->
                    <a href="staff_signup.php" class="btn btn-primary">
                    Sign Up
                    </a>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>