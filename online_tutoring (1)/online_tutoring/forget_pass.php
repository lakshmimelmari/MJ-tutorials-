<?php 
    include 'navbar.php';
    include 'configure.php';

    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $phone =$_POST['phone'];
        $pass = $_POST['password'];
        if($_POST['role']=="admin"){
            $sql = "select *from admin where email = '$email' and phone='$phone'";    
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)){
                $sql = "update admin set password='$pass' where email = '$email' ";    
                $res = mysqli_query($conn,$sql);
                ?>
                <script>
                    alert('Successfully updated');
                </script>
                <?php
            }else{
                    ?>
                    <script>
                        alert('Incorrect details');
                    </script>
                    <?php 
               } 
            }
        
    
            if($_POST['role']=="student"){
                $sql = "select *from student where email = '$email' and phone='$phone'";    
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)){
                    $sql = "update student set password='$pass' where email = '$email' ";    
                    $res = mysqli_query($conn,$sql);
                    ?>
                    <script>
                        alert('Successfully updated');
                    </script>
                    <?php
                }else{
                        ?>
                        <script>
                            alert('Incorrect details');
                        </script>
                        <?php 
                   } 
                }
                if($_POST['role']=="staff"){
                    $sql = "select *from tutor where email = '$email' and phone='$phone'";    
                    $res = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)){
                        $sql = "update tutor set password='$pass' where email = '$email' ";    
                        $res = mysqli_query($conn,$sql);
                        ?>
                        <script>
                            alert('Successfully updated');
                        </script>
                        <?php
                    }else{
                            ?>
                            <script>
                                alert('Incorrect details');
                            </script>
                            <?php 
                       } 
                    }
        }
     
?>
<style>
    .card-body *{
        font-size:18px;
    }
</style>
<body>
    <div class="card d-block mx-auto mt-5 " style="width: 50%">
        
        <div class="card outline m-3" style="width: auto;">
            
            <div class="card-body">
                <h1 class="card-title mb-2">Forget Password</h1>
                <form acttion="" method="post">
                    <div class="my-2 text frame-inline">
                        Role
                        <select name="role" class="form-control">
                            <option value="">select</option>
                            <option value="admin">admin</option>
                            <option value="staff">staff</option>
                            <option value="student">student</option>
                        </select>
                    </div>   
                     <div class="my-2 text">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" class="form-control" value="" >
                        
                    </div>
                    <div class="my-2 text">
                        <label for="exampleInputPassword1" class="form-label">Phone number</label>
                        <input name="phone" class="form-control" id="exampleInputPassword1" value="">
                    </div>
                    
                   
                             <div class="my-4 text">
                            <label for="exampleInputPassword1" class="form-label">New password</label>
                            <input name="password" class="form-control" id="exampleInputPassword1" value="">
                            </div>
                            <button type="change" class="btn btn-primary" name="update">update</button>

                          
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>