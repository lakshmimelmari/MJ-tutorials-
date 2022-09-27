<?php
    session_start();
    include 'configure.php';
    include 'sidebar.php';
    $id = $_SESSION['id'];
    $sql = "select *from courses where tutor_id='$id'";
    $count=1;
    $res=mysqli_query($conn,$sql);

?>

<div style="overflow-y:scroll; width: 100%; background: #eeeeee;" class="m-1 p-3">
    <div class="container mt-4">
    <div class="d-flex justify-content-between m-2">
        <h2 class="card-title d-inline">List of Courses</h2>
        <a href="add_course.php" class="btn btn-lg btn-primary ">Add New Course</a>
    </div>
    <div class="container mt-5">
        
    <div class="card ">
   
   <div class="card-body">
   

       <table class="table table-striped ">
       <thead>
           <tr>
           <th scope="col">Sl No</th>
           <th scope="col">Course name</th>
           <th scope="col">Class</th>
           <th scope="col">Cost</th>
           <th scope="col">Modify</th>
           <th scope="col">View</th>
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
                        <td> <?php   echo $result['name'];   ?>       </td>
                        <td> <?php   echo $result['class'];   ?>       </td>
                        <td> <?php   echo $result['cost'];   ?>       </td>
                        
                        <td><a href="content.php?courseid=<?php echo htmlentities($result['courseid']);?>">
                        <button class="btn btn-primary">Add resource</button></a>    </td>
                         
                        <td><a href="course_details.php?courseid=<?php echo htmlentities($result['courseid']);?>">
                        <button class="btn btn-primary">Details</button></a>    </td>
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
    


