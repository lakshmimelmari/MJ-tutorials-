<?php
    session_start();
    include 'configure.php';
    include 'sidebar.php';
    $id = $_SESSION['id'];
    $courseid = $_GET['courseid'];
    $sql = "select *from course_contentes where course_id='$courseid'";
    $count=1;
    $res=mysqli_query($conn,$sql);
    $sql = "select *from courses where courseid='$courseid'";;
    $result5=mysqli_query($conn,$sql);
    $result6=mysqli_fetch_assoc($result5);
    $coursename=$result6['name'];
    $class = $result6['class'];
?>

<div style="overflow-y:scroll; width: 100%; background: #eeeeee;" class="m-1 p-3">
    <div class="container mt-4">
    <div class="d-block m-2">
        <h2 class="card-title d-block my-4">Course Details</h2>
        <h4>Course Name : <?php echo $coursename;?> </h4>
        <h4>Class : <?php echo $class;?> </h4>
    
    </div>
    <div class="container mt-5">
        
    <div class="card ">
    
   <div class="card-body">
   
       
       <table class="table table-striped ">
       <thead>
           <tr>
           <th scope="col">Sl No</th>
           
           <th scope="col">Resource links</th>
         
           </tr>
       </thead>
       <tbody>
        <?php
            // echo "<td> ". $_SESSION['id']."</td";
            if(mysqli_num_rows($res)==0){
                ?>
                    <tr><td colspan="5" class="text-center">No records found</td></tr>
                <?php
            }
            while($result=mysqli_fetch_assoc($res)){

                
                // echo "<td>". $result['cname']."</td>";
                // echo "<td>". $result['cost']."</td>";
                // echo "<td> ".$result['sname']."</td>";
                ?>
                    <tr>
                        <td> <?php   echo $count++;   ?>       </td>
                        <td> <?php   echo "<a>".$result['resources']."</a>";   ?>       </td>
                        
                    </tr>
                <?php
               
            }

        ?>
           
           
       </tbody>
       </table>

       </div>
       </div>
    </div>
    </div>
</div>
    


