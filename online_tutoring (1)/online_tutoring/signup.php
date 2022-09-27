<?php 
    include 'navbar.php';
    include 'configure.php';
?>
<body>
    <div class="card d-block mx-auto mt-5 " style="width: 50%">
        
        <div class="card outline m-3" style="width: auto;">
            
            <div class="card-body">
                <h2 class="card-title">Register Staff</h2>
                <form>
  <div class="my-4 text">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="my-4 text">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>